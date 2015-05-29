<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $fillable = 
	[
	'name'
	];
	// get articles associated with given tag
	public function articles()
	{
		return $this->belongsToMany('App\Article');
	}
}