# Laravel Matjarak Application

تطبيق Laravel مستخرج من ملف ZIP.

## المتطلبات

- PHP 8.1 أو أعلى
- Composer
- MySQL أو قاعدة بيانات أخرى مدعومة

## التثبيت

1. استنساخ المستودع:
```bash
git clone https://github.com/Azzoz2684/laravel_matjarak.git
cd laravel_matjarak
```

2. تثبيت المكتبات:
```bash
composer install
```

3. نسخ ملف البيئة:
```bash
cp .env.example .env
```

4. توليد مفتاح التطبيق:
```bash
php artisan key:generate
```

5. تشغيل الهجرات:
```bash
php artisan migrate
```

6. بدء خادم التطوير:
```bash
php artisan serve
```

## الميزات

- نظام المصادقة
- إدارة المنشورات
- نظام التعليقات
- نظام الإعجابات

## الترخيص

هذا المشروع مرخص تحت رخصة MIT.
