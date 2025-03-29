@extends('blogs.layout')

@section('title','Variable here')


@section('main-content')

<div>

    <div class="blog-display">
        <!-- Header Image -->
        <div class="header-image">
            <img src="header.jpg" alt="Blog Header">
        </div>
        
        <!-- Title, Controls, and Author Info -->
        <div class="blog-info">
            <h2>Blog Title</h2>
            <div class="controls">
                <button>Save</button>
                <button>Report</button>
                <button>Share</button>
            </div>
            <div class="author-card">
                <img src="author.jpg" alt="Author Image">
                <p>Author Name</p>
            </div>
        </div>
        
        <!-- Blog Content -->
        <div class="blog-content">
            <p>Blog content goes here...</p>
        </div>
        
        <!-- Extra Div (Can be used for comments or related posts) -->
        <div class="extra-section">
            <p>Additional content (comments, related posts, etc.)</p>
        </div>
    </div>
    
</div>

@endsection

