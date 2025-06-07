    
<!-- Nothing worth having comes easy. - Theodore Roosevelt -->

<article class="grid grid-cols-3 gap-4 items-center p-4 bg-white shadow-md rounded-2xl">
    <!-- Image Section -->
    <figure class="w-full h-full">
        <img src="{{ $post->image }}" alt="Post Image" class="w-full h-32 object-cover rounded-xl">
    </figure>

    <!-- Post Info Section -->
    <div class="space-y-1">
        <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
        <p class="text-sm text-gray-600">{{ $post->author->username }}</p>
        <p class="text-sm text-gray-500">{{ $post->date() }}</p>
    </div>

    <!-- Likes & Bookmark Section -->
    <div class="flex flex-row items-end justify-end space-y-2 gap-2">
        <p class="text-sm text-gray-700">Likes</p>
        <form method="POST" action="bookmark/{post_id}">
            @csrf
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Bookmark
            </button>
        </form>
    </div>
</article>

