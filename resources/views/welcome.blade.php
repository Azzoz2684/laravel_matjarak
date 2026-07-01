@extends('layout')

@section('title', 'الرئيسية')

@section('content')
    <div style="text-align: center; padding: 50px 0;">
        <h1>مرحباً بك في Laravel Matjarak</h1>
        <p style="font-size: 18px; color: #666; margin: 20px 0;">
            تطبيق Laravel متقدم مع ميزات عديدة
        </p>
        
        @guest
            <a href="{{ route('login') }}" class="btn" style="font-size: 16px; padding: 15px 30px;">
                ابدأ الآن
            </a>
        @else
            <p>أهلاً {{ Auth::user()->name }}!</p>
            <a href="{{ route('profile.show') }}" class="btn" style="font-size: 16px; padding: 15px 30px;">
                الملف الشخصي
            </a>
        @endguest

        <div style="margin-top: 50px; text-align: left;">
            <h2>المميزات:</h2>
            <ul style="list-style: none; text-align: right;">
                <li>✓ نظام المصادقة الآمن</li>
                <li>✓ إدارة المنشورات</li>
                <li>✓ نظام التعليقات</li>
                <li>✓ نظام الإعجابات</li>
                <li>✓ محفظة رقمية</li>
                <li>✓ إشعارات Web Push</li>
            </ul>
        </div>
    </div>
@endsection
