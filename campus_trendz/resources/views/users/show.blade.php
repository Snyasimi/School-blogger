@extends('users.layout')

@section('title', 'User profile')

@push('stylesheet')

    <link href="{{ asset('/css/users/show.css')  }}" rel="stylesheet">

@endpush


@section('main')

<main>

    <aside>

        <ul class="side">
            <li><a href="{{ route('home.index') }}" class="link">Home</a></li>
            <li><a href="{{ route('user.edit',['user' => 1]) }}" class="link">Settings</a></li>
            <li><a href="#" class="link">Profile</a></li>
            <li><a href="#" class="link">Bookmarks</a></li>
        </ul>
    
    
    </aside>

    <div class="content">

        <div class="user-details">
            <h2>User Profile</h2>
           <!--  <img src="https://images-assets.nasa.gov/image/PIA23962/PIA23962~orig.jpg" alt="Blog Thumbnail" class="blog-thumbnail"> -->
            <p><strong>First Name:</strong> {{ $user->first_name}}</p>
            <p><strong>Last Name:</strong> {{ $user->last_name }}</p>
            <p><strong>Username:</strong> {{ $user->email }}</p>
            <p><strong>Email:</strong> {{ $user->school_email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone_number}}</p>
        </div>

        <!-- Conditional Author Details -->
        @if(true)
        <div class="author-details">
            <h2>Author Information</h2>
            <p><strong>Pen Name:</strong> {{ $user->author->bio }}</p>
            <p><strong>Biography:</strong> {{ $user->author->bio }}</p>
            <p><strong>Follower Count:</strong> {{ $user->author->followers_count }}</p>
            <p><strong>Blog Count:</strong> {{ $user->author->blogs_count }}</p>
        </div>
        @endif

    </div>

</main>

@endsection

