<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{
		$name = 'Site<span style="color:red;">Builder</span>One';
		//return 'About Page';
		//return view('pages.about');


		$people = [
		'Tony', 'Baloney', 'Jayjay'
		];
		//return view('pages.about')->with('name', $name);
		return view('pages.about', compact('people'));
		
	}

public function contact()
	{
		return view('pages.contact');
	}

}
 