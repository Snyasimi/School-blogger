@extends('users.layout')

@section('title','create a blog')

@push('stylesheet')

    <link href="{{ asset('css/blogs/create.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.3.0/ckeditor5.css">

@endpush

@section('main')
<main>


    <aside>

        <ul class="side">
            <li><a href="{{ route('home.index') }}" class="link">Home</a></li>
            <li><a href="#" class="{{ route('users.show') }}">Settings</a></li>
            <li><a href="#" class="link">Profile</a></li>
            <li><a href="#" class="link">Bookmarks</a></li>
        </ul>
    
    
    </aside>

    <div class="form-container">
        <form  class="blog-form" action="submit_blog.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="editor" name="content" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="technology">Technology</option>
                    <option value="lifestyle">Lifestyle</option>
                    <option value="education">Education</option>
                    <option value="health">Health</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            
            <div class="form-buttons">
                <button type="submit">Publish</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>


</main>

<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor');
</script>
@endsection

