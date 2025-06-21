<!-- Simplicity is an acquired taste. - Katharine Gerould -->

<article class="flex-1 bg-white rounded-lg shadow-md overflow-hidden flex flex-col hover:shadow-lg transition duration-300">
    
    <!-- Image -->
    <figure>
        <img 
            src="{{ $post->image }}" 
            alt="Blog Image" 
            class="w-full h-48 object-cover transition duration-300 group-hover:scale-[1.01]"
        >
    </figure>

    <!-- Content -->
    <div class="p-4 flex flex-col flex-grow justify-between space-y-2">
        <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
        <p class="text-sm text-gray-700 line-clamp-3">{{ $post->content }}</p>

        <a href="{{ route('blog.show', $post->id) }}" class="text-blue-600 text-sm underline hover:text-blue-800">
            Read full post
        </a>

        <div class="mt-auto flex flex-wrap justify-between items-center gap-2 pt-4 border-t border-gray-200">
            <div class="text-sm text-gray-600">
                ❤️ {{ $post->likes_count ?? 0 }} Likes
            </div>

            <div class="flex gap-2">
                {{-- Like Form --}}
                <form method="POST" action="/blog/like/{{ $post->id }}">
                    @csrf
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                        Like
                    </button>
                </form>

                {{-- Bookmark Form --}}
                <form method="POST" action="/blog/bookmark/{{ $post->id }}">
                    @csrf
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                        Bookmark
                    </button>
                </form>
            </div>
        </div>
    </div>

</article>
