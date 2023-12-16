<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
			'name'        => 'required|string|min:3|max:150',
			'lastname'    => 'required|string|min:3|max:150',
			'email'       => 'required|string|lowercase|email|min:3|max:255',//['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
			'smarthphone' => 'string|min:9|max:12',
			'date_birth'  => 'required|date',
			'belt'        => 'required|string|min:3|max:55',
			// 'graduation' => 'required|string|min:3|max:3'
		];
	}
}
