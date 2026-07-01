@extends('layout')

@section('title', 'تسجيل الدخول')

@section('content')
    <div style="max-width: 400px; margin: 50px auto;">
        <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h2 style="text-align: center; margin-bottom: 30px;">تسجيل الدخول</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div style="margin-bottom: 20px;">
                    <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                    @error('email')
                        <span style="color: red; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold;">كلمة المرور</label>
                    <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                    @error('password')
                        <span style="color: red; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit" class="btn" style="width: 100%; text-align: center;">
                    دخول
                </button>
            </form>
        </div>
    </div>
@endsection
