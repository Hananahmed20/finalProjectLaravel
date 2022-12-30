<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'description' => 'required|string',
            'image' =>'required'
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
            'description.string' => 'description is required',
            'image.required' => 'you must send an image',
          ];
    }
}
