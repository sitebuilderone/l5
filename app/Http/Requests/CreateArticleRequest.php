<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// does user have permission
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			'title' => 'required|min:5',
			'body' => 'required|min:5',
			'published_at' => 'required|date'
		];
	}

}
