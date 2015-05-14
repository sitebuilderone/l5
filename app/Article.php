<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	// what users can add to table
	protected $fillable = [
		'title', 'body', 'published_at'
	];

}
