<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
			'student_id'      => 'required',
			// 'payment_date'    => 'required|date',
			'amount_paid'     => 'required',
			'reference_month' => 'required|date',
			'payment_method'  => 'required|string',
			'notes'           => 'nullable|max:255',
        ];
    }
}
