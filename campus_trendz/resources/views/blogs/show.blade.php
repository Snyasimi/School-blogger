@extends('users.layout')

@section('title','Variable here')

@push('stylesheet')

    <link href="{{ asset('css/blogs/show.css')}}" rel="stylesheet"> 
@endpush

@section('main')

<main>

    <aside>

        <ul class="side">
            <li><a href="#" class="link">Home</a></li>
            <li><a href="#" class="link">Settings</a></li>
            <li><a href="#" class="link">Profile</a></li>
            <li><a href="#" class="link">Bookmarks</a></li>
        </ul>
    
    
    </aside>


    <div class="blog-container">

        <div class="blog">

            <div class="blog-display">
                <!-- Header Image -->
                <div class="header-image">
                    <img src="https://images-assets.nasa.gov/image/PIA23962/PIA23962~orig.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                </div>
                
                <!-- Title, Controls, and Author Info -->
                <div class="blog-info">
                    <h2>{{ $blog->title }}</h2>

                    <div class="controls">
                        <div>
                           
                            <p>By : {{ $blog->creator->user->first_name }}</p>
                        </div>
                       <!--  <div class="control-buttons">
                            <button>Save</button>
                            <button>Report</button>
                            <button>Share</button>
                       -->
                        </div>
                    </div>
                   <!--  <div class="author-card">
                        <img src="https://images-assets.nasa.gov/image/PIA23962/PIA23962~orig.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                        <p>Author Name</p>
                    </div>

                -->
                </div>
                
                <!-- Blog Content -->
                <div class="blog-content">
                    <p>{{ $blog->content }}</p>

                    <p>{{ $blog->content }}</p>

                    <p>{{ $blog->content }}</p>
                </div>
                
                <!-- Extra Div (Can be used for comments or related posts) -->
                <div class="extra-section">
                    <p>Additional content (comments, related posts, etc.)</p>
                </div>
            </div>

        </div>
        
    </div>

</main>



@endsection

