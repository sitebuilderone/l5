@extends('app')

@section('content')

	<h1>Articles</h1>

	@foreach ($articles as $article)
		<article>
			<h2>
				<a href="{{ action('ArticlesController@show', [$article->id])}}">{{ $article-> title }}</a>
			</h2>
			<div class="body">{{ $article->body }}</div>
		</article>
	@endforeach

	<hr/>

	<h2><a href="{{ action('ArticlesController@create')}}">Create new article</a></h2>

@stop

