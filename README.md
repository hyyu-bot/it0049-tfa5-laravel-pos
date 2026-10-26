# Laravel POS — IT0049 TFA5

Rebuild of the POS application from TFA1 in Laravel, using MVC architecture with Blade templates and static PHP array data sources.

## Pages

- `/` — Landing page (Home)
- `/about` — About page
- `/customers` — Customer Accounts (static PHP array, 7 records)
- `/users` — User Accounts (static PHP array, 7 records)

## Structure

- `routes/web.php` — Defines all four routes
- `app/Http/Controllers/PageController.php` — Handles `/` and `/about`
- `app/Http/Controllers/CustomerController.php` — Handles `/customers` with static array
- `app/Http/Controllers/UserController.php` — Handles `/users` with static array
- `resources/views/layouts/app.blade.php` — Shared layout with navigation
- `resources/views/home.blade.php` — Landing page view
- `resources/views/about.blade.php` — About page view
- `resources/views/customers/index.blade.php` — Customer accounts view with `@foreach`
- `resources/views/users/index.blade.php` — User accounts view with `@foreach`

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Visit `http://127.0.0.1:8000` to see the app.

## Technologies

- Laravel 12
- PHP 8.2+
- Blade Templates
- Static PHP Arrays (no database required)

## Course

IT0049 — Web System Technologies
TFA5: From Zero to Four Pages, Again (Laravel POS Foundations)
