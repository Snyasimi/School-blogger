<!-- Simplicity is an acquired taste. - Katharine Gerould -->

<article class="flex flex-row gap-2 items-center p-2 bg-white shadow-md rounded-2xl hover:shadow-lg transition duration-300 group ">
    
    <!-- Image Section -->
    <figure class="">
        <img src="{{ $post->image }}" alt="Blog Image" class=" h-32 object-fit rounded-xl group-hover:scale-[1.02] transition duration-300">
    </figure>

    <!-- Info Section -->
    <div class="flex-1 flex flex-col col-span-1 space-y-1">

        <div class="flex-1">
            <h3 class="text-lg font-semibold group-hover:text-blue-700 transition">{{ $post->title }}</h3>
        <p class="text-sm text-gray-700 line-clamp-3">{{ $post->content }}</p>
        <a href="{{ route('blog.show', $post->id) }}" class="text-blue-600 text-sm underline hover:text-blue-800">Read full post</a>
        <div class="text-sm text-gray-600 pt-2">❤️ {{ $post->likes_count ?? 0 }} Likes</div>
        </div>

        <div class="flex-1 flex flex-row items-end gap-2  ">
            {{-- Like Form --}}
            <form method="POST" action="/blog/like/{{ $post->id }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm transition">
                    Like
                </button>
            </form>
    
            {{-- Bookmark Form --}}
            <form method="POST" action="{{ route('bookmark.store') }}">
                @csrf
                <input type="text" hidden name="post_id" value="{{ $post->id}}"> 
                <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 text-sm transition">
                    Bookmark
                </button>
            </form>
        </div>
    </div>

    <!-- Actions Section -->
    

</article>
