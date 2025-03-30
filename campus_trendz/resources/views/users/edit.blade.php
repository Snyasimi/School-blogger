@extends('users.layout')

@section('title','Settings')

@push('stylesheet')

    <link href="{{ asset('css/users/edit.css') }}" rel="stylesheet">
@endpush

@section('main')

    <main>

    
        <aside>

            <ul class="side-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Create a post</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
       
        </aside>

        <div class="main-content">

            <div class="update-form">
              

                <form action="#" method="post" class="form-update">
                    <h2>Update User Information</h2>
                    @csrf
                    <div class="name-group">
                        <div class="input-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>

                        <div class="input-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="current-password">Current Password:</label>
                        <input type="password" id="current-password" name="current_password" required>
                    </div>
                    <div class="form-group">
                        <label for="new-password">New Password:</label>
                        <input type="password" id="new-password" name="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm New Password:</label>
                        <input type="password" id="confirm-password" name="confirm_password" required>
                    </div>
                    

                    <div class="form-controls">
                        <button type="submit">Update</button>
                    </div>
                </form>

            </div>

        </div>

    </main>


@endsection