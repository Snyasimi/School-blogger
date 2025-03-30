@extends('users.layout')

@section('title', 'Home page')

@push('stylesheet')

    <link href="{{ asset('/css/users/homepage.css')  }}" rel="stylesheet">

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
            
            <div class="trending">
                
                <h2>Trending</h2>

                <div class="trending-blogs">

                    @foreach ($posts as $post )
                        <article>
                
                            <img src="https://images-assets.nasa.gov/image/PIA23962/PIA23962~orig.jpg" alt="Blog Thumbnail" class="blog-thumbnail">

                            <div class="trending-details">
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->title}}</p>
                                <a href="post-1.html">Read More</a>
                            </div>

                        </article>

                    @if($loop->index == 4)
                        @break
                    @endif
                
                    @endforeach

                </div>
               

               
        
            </div>
    
            <div class="other-blogs">

                <h2>More content</h2>
    
                <div class="blogs">

                    @foreach ($posts as $post )
    
                    <div class="blog-card">
                
                        <img src="https://images-assets.nasa.gov/image/PIA23962/PIA23962~orig.jpg" alt="Blog Thumbnail" class="blog-thumbnail">
                
                        <div class="blog-info">
                
                            <h3 class="blog-title">{{ $post->title }}</h3>
                            <p class="blog-author">by {{ $post->creator->user->first_name}}</p>
                            <p class="blog-summary">A short summary of the blog post goes here...</p>

                            <div class="blog-controls">
                                <a href="#">Read more</a>
                                <form action="">
                                    <input type="text" hidden disaled  name="blog_id" value="{{ $post->id }}">
                                    <button type="submit">Bookmark</button>
                                </form>
                                <p>Likes: 44</p>
                                
                            </div>
                            
                        </div>
                   
                    </div>
                
                @endforeach

                </div>

            </div>

        </div>

    </main>

@endsection