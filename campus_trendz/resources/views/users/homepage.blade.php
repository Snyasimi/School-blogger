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

       

        <div class="blog-container">

            <div class="trending">

    
                <article>
                
                    <h3>Blog Post Title 1</h3>
                    <p>Summary or introduction...</p>
                    <a href="post-1.html">Read More</a>
        
                </article>
        
                <article>
        
                    <h3>Blog Post Title 2</h3>
                    <p>Summary or introduction...</p>
                    <a href="post-2.html">Read More</a>
            
                </article>
        
            </div>
    
            <h2>Blogs</h2>
    
            <article>
            
                <h2>Blog Post Title 1</h2>
                <p>Summary or introduction...</p>
                <a href="post-1.html">Read More</a>
    
            </article>
    
            <article>
    
                <h2>Blog Post Title 2</h2>
                <p>Summary or introduction...</p>
                <a href="post-2.html">Read More</a>
        
            </article>

        </div>

    </main>

@endsection