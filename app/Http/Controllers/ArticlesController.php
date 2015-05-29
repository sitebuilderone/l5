<?php namespace App\Http\Controllers;
// import the class
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Request;

class ArticlesController extends Controller {

	// Authentication with middleware
	// Constructor
	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']);
		// or can use
		// $this->middleware('auth', ['except' => 'index']);
	}

	// call a method index
	public function index()
	{
		//return 'Get all articles';

		// fetch all articles
		//$articles = Article::all();

		//$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())-> get();
		$articles = Article::latest('published_at')->published()-> get();
		
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
		//dd($article->created_at->year);

		//return $article;
		return view('articles.show', compact('article'));
	}
	public function create()
	{
		$tags = \App\Tag::lists('name', 'name');


		// load a view
		return view('articles.create', compact('tags'));
	}

	public function store(Requests\ArticleRequest $request)
	{

		// validation
//		Auth::user()->articles()->create($request->all());
		//Article::create($request->all());

		// display a flash message
		\Session::flash('flash_message', 'Your article has been created');
			// validation
		//Article::create($request->all());
		
		$article = Auth::user()->articles()->create($request->all());

		//$tagIds = $request->input('tags');

		$article->tags()->attach($request->input('tags'));

		return redirect('articles');
	}

	// editing an article - shows page to edit exist
	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	public function update($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles');
	}
}
