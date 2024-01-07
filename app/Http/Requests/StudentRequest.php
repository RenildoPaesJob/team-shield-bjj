<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
		$rules =  [
			'name'        => 'required|string|min:3|max:150',
			'lastname'    => 'required|string|min:3|max:150',
			'email'       => 'required|string|lowercase|email|unique:students,email|min:3|max:255',
			'smarthphone' => 'string|min:9|max:12',
			'date_birth'  => 'required|date',
			'belt'        => 'required|string|min:3|max:65',
		];

		if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
			$rules['email'] =  [
				'email' => [
					'required',
					'string',
					'lowercase',
					'email',
					'min:3',
					'max:255',
					Rule::unique('students')->ignore($this->id)
				]
			];
		}

		return $rules;
	}
}
