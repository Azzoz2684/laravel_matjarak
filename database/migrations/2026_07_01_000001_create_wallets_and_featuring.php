<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('balance', 10, 2)->default(0);
            $table->timestamps();
        });

        Schema::create('wallet_announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('push_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->longText('endpoint');
            $table->longText('public_key');
            $table->longText('auth_token');
            $table->timestamps();
        });

        Schema::create('social_media_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('platform');
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_media_links');
        Schema::dropIfExists('push_subscriptions');
        Schema::dropIfExists('wallet_announcements');
        Schema::dropIfExists('wallets');
    }
};
