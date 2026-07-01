@extends('layout')

@section('title', 'الملف الشخصي')

@section('content')
    <div style="max-width: 600px; margin: 0 auto;">
        <h2>الملف الشخصي</h2>
        
        <div style="background: white; padding: 20px; border-radius: 8px; margin-top: 20px;">
            <p><strong>الاسم:</strong> {{ $user->name }}</p>
            <p><strong>البريد الإلكتروني:</strong> {{ $user->email }}</p>
            <p><strong>تاريخ الإنشاء:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>
            
            <a href="{{ route('profile.edit') }}" class="btn" style="margin-top: 20px;">
                تعديل الملف الشخصي
            </a>
        </div>
    </div>
@endsection
