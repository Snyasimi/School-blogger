<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'username' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'campus' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'confirm_password' => ['required','same:password'],
            //
        ];
    }

    public function messages()
{
    return [
        'username.required' => 'Username is required.',
        'firstname.required' => 'Firstname is required.',
        'lastname.required' => 'Lastname is required.',
        'campus.required' => 'Campus is required.',
        'phone_number.required' => 'Phone number is required.',
        'email.required' => 'Email is required.',
        'password.required' => 'Password is required.',
        'confirm_password.required' => 'Please confirm your password.',
        'confirm_password.same' => 'The confirmation does not match the password.',
    ];
}
}
