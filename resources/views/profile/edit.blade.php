@extends('layout')

@section('title', 'تعديل الملف الشخصي')

@section('content')
    <div style="max-width: 600px; margin: 0 auto;">
        <h2>تعديل الملف الشخصي</h2>
        
        <form method="POST" action="{{ route('profile.update') }}" style="background: white; padding: 20px; border-radius: 8px; margin-top: 20px;">
            @csrf
            @method('PUT')
            
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 5px;">الاسم</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                @error('name')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
            
            <div style="margin-bottom: 20px;">
                <label for="email" style="display: block; margin-bottom: 5px;">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                @error('email')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="btn">حفظ التغييرات</button>
        </form>
    </div>
@endsection
