<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Article extends Model {

	// what users can add to table
	protected $fillable = [
		'title', 'body', 'published_at'
	];
	protected $dates = ['published_at'];

	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}
	public function scopeunpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}
}
