@extends('users.layout')

@section('title', 'Home page')

@push('stylesheet')

    <link href="{{ asset('/css/users/homepage.css')  }}" rel="stylesheet">

@endpush


@section('main')

    <main>

        <aside>

            <ul>
                <li>Home</li>
                <li>Settings</li>
                <li>Profile</li>
                <li>Bookmarks</li>
            </ul>
        
        
        </aside>

       

        <div>

            <article>
                <div class="bookmark-card">
                    <img src="bookmark-thumbnail.jpg" alt="Bookmark Thumbnail" class="bookmark-thumbnail">
                    <div class="bookmark-info">
                        <h3 class="bookmark-title">Bookmarked Blog Title</h3>
                        <p class="bookmark-author">by Author Name</p>
                        <a href="#">Read blog</a>
                        <button class="remove-bookmark">Remove Bookmark</button>
                    </div>
                </div>
            </article>

        </div>

    </main>

@endsection