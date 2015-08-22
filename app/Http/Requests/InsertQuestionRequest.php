<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertQuestionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
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
			'q_description' => 'required',
			'q_opt_1' => 'required',
			'q_opt_2' => 'required',
			'q_opt_3' => 'required',
			'q_opt_4' => 'required',
			'q_ans' => 'required'
		];
	}

}
