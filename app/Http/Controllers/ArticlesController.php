<?php namespace App\Http\Controllers;

// import the class
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

//use Illuminate\Http\Request;

use Request;

class ArticlesController extends Controller {

	// call a method index
	public function index()
	{
		//return 'Get all articles';

		// fetch all articles
		//$articles = Article::all();

		$articles = Article::latest('published_at')->get();

		// or can be writter
		// $articles = Article::order_by('published_at', 'desc')->get();

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

	public function create()
	{
		// load a view
		return view('articles.create');
	}

	public function store()
	{
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		Article::create($input);

		//return $input;

		// redirect
		return redirect('articles');


	}


}
