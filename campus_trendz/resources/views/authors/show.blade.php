@extends('users.layout')

@section('title','Author')


@push('stylesheet')

    <link href="{{ asset('css/authors/show.css') }}" rel="stylesheet">
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

    <div class="main-content">

        <div class="author-info">
            
            <figure>
      
                <img src="profile.jpg" alt="Author Profile" class="profile-pic">
            </figure>

            <img src="profile.jpg" alt="Author Profile" class="profile-pic">

            <h2>Author Name</h2>

            <p class="bio">Short bio about the author goes here...</p>
            <p><strong>Followers:</strong> 1,234</p>
            <p><strong>Blogs Written:</strong> 56</p>

        </div>

        <div class="author-blogs">

    
            <!-- Blog Card -->
            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>

            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>


            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>

            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>

            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>

            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>

            <div class="blog-card">
                <img src="blog-thumbnail.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                <div class="blog-info">
                    <h3 class="blog-title">Blog Title</h3>
                    <p class="blog-author">by Author Name</p>
                    <p class="blog-summary">A short summary of the blog post goes here...</p>
                    <button class="read-more">Read More</button>
                </div>
            </div>

        </div>

    </div>

</main>


@endsection