<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id  = $this->id ?? '';
        // dd($id);
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email',
                "unique:alunos,email,{$id},id",
            ],
            'telphone' => [
                'required',
                'min:10',
                'max:19',
            ],
            'belt' => [
                'required'
            ]
        ];

        if ($this->method('PUT')) {
            $rules['telphone'] = [
                'nullable',
                'min:10',
                'max:19',
            ];
            
            $rules['belt'] = [
                'required'
            ];
        }

        return $rules;
    }
}
