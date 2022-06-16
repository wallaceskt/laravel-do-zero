<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        return [
            'name' => 'required',
            'email' => [
                'required',
                'email'
            ],
            'message' => 'required'
        ];
    }
    
    /**
     * messages
     *
     * @return void
     */
    public function messages()
    {
        return [
            'name.required' => 'O campo :attribute não pode estar vazio.',
            'email.required' => 'O campo :attribute não pode estar vazio.',
            'email.email' => 'O :attribute está num formato inválido.',
            'message.required' => 'O campo :attribute não pode estar vazio.'
        ];
    }
}
