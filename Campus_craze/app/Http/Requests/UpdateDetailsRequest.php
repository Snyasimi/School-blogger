<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetailsRequest extends FormRequest
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
		'firstname' => ['required'],
		'lastname' => ['required'],
		'username' => ['required'],
		'image' => ['required','sometimes'],
		'campus' => ['required']
        ];
    }

    public function messages(): array
    {
	        return [

			'firstname.required' => 'The first name field is required.',
			'lastname.required' => 'The last name field is required.',
			'username.required' => 'The username field is required.',
			'image.required' => 'Please upload a profile photo.',
			'campus.required' => 'The campus field is required.',
		];
    }

}
