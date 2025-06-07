@extends('Blogs.layout')

@section('title','create a blog')

@section('content')

<main id="main" class="bg-blue-50 p-4">

		<form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="w-3/4 mx-auto bg-white p-6 rounded-lg shadow space-y-6">
		@csrf
		<h2 class="font-bold text-lg" >Tell us your story</h2>

        {{-- Blog Image --}}
	    <div>
		<label for="image" class="block text-sm font-medium text-gray-700">Blog Header Image</label>
		<input 
			type="file" 
			name="image" 
			id="image" 
			accept="image/*"
			class="mt-1 block w-full text-sm text-gray-700 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
	   </div>

    {{-- Blog Title --}}
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Blog Title</label>
        <input 
            type="text" 
            name="title" 
            id="title" 
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
            required
        >
    </div>

    {{-- Blog Content --}}
    <div>
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <textarea 
            name="content" 
            id="content" 
            rows="10"
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
            required
        ></textarea>
    </div>

    {{-- Submit Button --}}
    <div class="text-right">
        <button 
            type="submit" 
            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700"
        >
            Publish Blog
        </button>
    </div>
</form>


</main>

@endsection
