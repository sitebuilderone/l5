## l5 - Laravel Sample Project

Test demo sample project in Laravel 5

Set up locally via AMPPS (not Homestead)

##Setup

Rename .env.sample file to .env for development setup (local)

## Create new controller
```
php artisan make:controller PagesController
php artisan make:controller PagesController --plain  (for a plain controller)
php artisan help make:controller - help with the make controller
```

##Database Migrations

http://laravel.com/docs/5.0/migrations
```
php artisan migrate
```
Create a new table
php artisan make:migration create_articles_table --create="articles"

add a new column
```
php artisan make:migration add_excerpt_to_articles_table --table="articles"
```
to drop a column, need to add via composer
```
composer require doctrine/dbal
```

###References

https://help.github.com/articles/markdown-basics/


