<?php

namespace App\Services;

use App\Models\PushSubscription;
use Minishlink\WebPush\WebPush;

class WebPushSender
{
    public static function send($title, $options = [])
    {
        $webPush = new WebPush([
            'VAPID' => [
                'subject' => 'mailto:example@example.com',
                'publicKey' => env('VAPID_PUBLIC_KEY'),
                'privateKey' => env('VAPID_PRIVATE_KEY'),
            ],
        ]);

        $subscriptions = PushSubscription::all();

        foreach ($subscriptions as $subscription) {
            $webPush->sendNotification(
                $subscription->endpoint,
                json_encode([
                    'title' => $title,
                    ...$options
                ]),
                $subscription->public_key,
                $subscription->auth_token
            );
        }

        $webPush->flush();
    }
}
