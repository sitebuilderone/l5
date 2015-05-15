<?php namespace App\Http\Controllers;

// import the class
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	// call a method index
	public function index()
	{
		//return 'Get all articles';

		// fetch all articles
		$articles = Article::all();

		return view ('articles.index', compact('articles'));
		// same as above
		// return view ('articles.index')->with('articles', $articles);

			// output raw data
			//return $articles;
	}

	public function show($id)
	{
		
		$article = Article::findOrFail($id);

		// 	die function - return NULL - not found
		//	dd($article);

		// if not found 
		if (is_null($article))
		{
			abort(404);
		}

		//return $article;
		return view('articles.show', compact('article'));
		

	}


}
