<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' =>'required|numeric',
            'message' => 'required|string',

        ];    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'email.required' => 'Email is required',
            'email.string' => 'Email must be a string',
            'phone.required' => 'The field of Phone is a number',
            'message.required' => 'Message is required',
  
        ];
    }
}
