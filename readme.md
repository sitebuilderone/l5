## l5 - Laravel Sample Project

Test demo sample project in Laravel 5

Set up locally via AMPPS (not Homestead, not that there is anything bad with Homestead)

##Setup

Rename .env.sample file to .env for development setup (local)

## Create new controllers
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
```
php artisan make:migration create_articles_table --create="articles"
```
add a new column
```
php artisan make:migration add_excerpt_to_articles_table --table="articles"
```
to drop a column, need to add via composer
```
composer require doctrine/dbal
```

##Eloquent

http://laravel.com/docs/5.0/eloquent

Create a new model called Article
```
php artisan make:model Article
```


##Let's tinker
```
php artisan tinker

$article = new App\Article;
$article->title = 'my article yo!';
$article->body = 'Lorem ipsum body yo yo';
$article->published_at = Carbon\Carbon::now();
```
to review
```
$article;
```
or
```
$article->toArray();
```
Save this ...
```
$article->save();
```
See all
```
App\Article::all()->toArray();
```
Basic tasks - find and get
```
$article = App\Article::find(1);

$article = App\Article::where('body', 'Lorem ispum')->get();

$article = App\Article::where('body', 'Lorem ispum')->first();
```
Populate all at same time, model needs to be updated to show protected field values.

Need to modify the Article Model
```
class Article extends Model {

	// what users can add to table
	protected $fillable = [
		'title', 'body', 'published_at'
	];

}
```
then re-start tinker and ...
```
$article = App\Article::create(['title'=>'New article yo', 'body'=>'Accidenti molto plenti', 'published_at'=>Carbon\Carbon::now()]);
```


## Fetching records and displaying in View

Create a controller 

```
php artisan make:controller ArticlesController --plain
```
within the controller
```
// import the class
use App\Article;
```

## Forms

Use a 3rd party tool for forms
```
composer require illuminate/html
```
register within Laravel config - add to app.php
```
'Illuminate\Html\HtmlServiceProvider',
```
then under 'alias'
```
		'Form'		=> 'Illuminate\Html\FormFacade',
		'Html'		=> 'Illuminate\Html\HtmlFacade',
```






###References

https://help.github.com/articles/markdown-basics/

###Updated

Anthony Lepki
@SiteBuilderOne




