<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSecurityDetailsRequest extends FormRequest
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
		'email' => ['required','sometimes'],
		'current_password' => ['required'],
		'new_password' => ['required','sometimes','same:new_password_confirmation'],
		'new_password_confirmation' => ['required','sometimes']
        ];
    }

    public function messages(): array
    {
	        return [
			'email.required'                     => 'The email field is required.',
			'current_password.required'          => 'The current password is required.',
			'new_password.required'              => 'The new password is required.',
			'new_password.same'                  => 'The new password and confirmation do not match.',
			'new_password_confirmation.required' => 'The new password confirmation is required.',
		];
    
    }
}
