@extends('auth.layout')

@section('title','Login page')

@section('main')

    <main>

        <form action="" method="POST">
            @csrf
            
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
        </form>

    </main>

@endsection