@extends('auth.layout')

@section('title','Sign up page')


@push('stylesheet')

<link href="{{ asset('/css/users/signup.css') }}" rel="stylesheet">

@endpush

@section('main')

<form action="#" method="POST">
    @csrf

    <div>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
    </div>

    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
    </div>

    <div>
        <label for="reg_number">Registration Number:</label>
        <input type="text" id="reg_number" name="reg_number" required>
    </div>

    <div>
        <label for="school_name">School Name:</label>
        <input type="text" id="school_name" name="school_name" required>
    </div>

    <div>
        <label for="school_email">School Email:</label>
        <input type="email" id="school_email" name="school_email" required>
    </div>

    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="tel" id="phone_number" name="phone_number" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>


    </main>

@endsection