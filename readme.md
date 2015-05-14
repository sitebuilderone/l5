## l5

Test demo sample project in Laravel 5

Set up locally via AMPPS (not Homestead)

##Setup

Rename .env.sample file to .env for development setup (local)

## Create new controller

php artisan make:controller PagesController

php artisan make:controller PagesController --plain  (for a plain controller)

php artisan help make:controller - help with the make controller

# Passing Data/Variables to Views

#Database Migrations

http://laravel.com/docs/5.0/migrations

php artisan migrate

Create a new table
php artisan make:migration create_articles_table --create="articles"
