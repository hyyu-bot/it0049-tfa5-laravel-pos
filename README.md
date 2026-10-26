# Tasks for Today Management System — IT0049 TSA3

Laravel rebuild of the Tasks for Today Management System from TSA1, using Eloquent ORM, migrations, and seeders.

## Pages

- `/` — Welcome page showing today's tasks
- `/tasks` — Full task list ordered by date
- `/profile` — Developer profile
- `/about` — About page

## Structure

- `routes/web.php` — Defines all routes
- `app/Http/Controllers/PageController.php` — Handles `/` (today's tasks) and `/about`
- `app/Http/Controllers/TaskController.php` — Handles `/tasks`
- `app/Http/Controllers/ProfileController.php` — Handles `/profile`
- `app/Models/Task.php` — Eloquent model for tasks
- `app/Models/User.php` — Eloquent model for users
- `database/migrations/` — Database schema migrations
- `database/seeders/` — Sample data seeders
- `resources/views/` — Blade templates

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Visit `http://127.0.0.1:8000` to see the app.

## Technologies

- Laravel 12
- PHP 8.2+
- Blade Templates
- Eloquent ORM
- MySQL

## Course

IT0049 — Web System Technologies
TSA3: Tasks for Today Management System in Laravel
