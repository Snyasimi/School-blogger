@extends('auth.layout')

@section('title','Login page')


@push('stylesheet')

<link href="{{ asset('/css/users/login.css') }}" rel="stylesheet">

@endpush


@section('main')

    <main>

        <form action="" method="POST">
            @csrf
            <h2> Campus Craze Login</h2>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
    
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
    
            <div>
                <button type="submit">Login</button>
            </div>

            <small>Or Sign Up here</small>
        </form>

    </main>

@endsection