@extends('blogs.layout')

@section('title','create a blog')


@section('main-content')

<div>
    <form action="submit_blog.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
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
        
        <div class="form-group buttons">
            <button type="submit">Publish</button>
            <button type="reset">Clear</button>
        </div>
    </form>
</div>

@endsection

