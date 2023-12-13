<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StundentRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'name'       => 'required|string|min:3|max:150',
			'lastname'   => 'required|string|min:3|max:150',
			'date_birth' => 'required|date',
			'belt'       => 'required|string|min:3|max:55',
			// 'graduation' => 'required|string|min:3|max:3'
		];
	}
}
