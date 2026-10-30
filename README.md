# Laravel POS From Arrays to Eloquent

Completed IT0049 TFA6 activity. The application includes:

- `customers` migration with `full_name`, `email`, and `phone`
- `users` migration with unique `username` and `full_name`
- `Customer` and `User` Eloquent models
- `CustomerSeeder`, `UserSeeder`, and `DatabaseSeeder`
- controller queries using `Customer::orderBy('id')->get()` and `User::orderBy('id')->get()`
- Blade views that display Eloquent records with `@foreach`
- `/`, `/about`, `/customers`, and `/users` routes

## Local Laravel setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`.

## InfinityFree setup

Upload and extract the contents of this ZIP directly into `htdocs`. The root `index.php` and `.htaccess` are included for shared hosting. The shared-host fallback uses the same seeded records from `database/data.json`, so the four required pages work without SSH, Composer, or a database setup step. The Laravel migrations, seeders, models, and Eloquent controllers remain included for the required source-code submission and normal Laravel execution.
