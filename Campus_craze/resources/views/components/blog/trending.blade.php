
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->


<article class="flex-1 bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
    <figure>
        <img 
            src="{{ $post->image }}" 
            alt="Blog Image" 
            class="w-full h-48 object-cover"
        >
    </figure>

    <div class="p-4 flex flex-col flex-grow justify-between">
        <h3 class="text-lg font-semibold mb-2">{{ $post->title }}</h3>
	<p class="overflow-hidden">{{ $post->content }}</p>
        <div class="mt-auto flex space-x-2">
            {{-- Like Form --}}
            <form method="POST" action="/blog/like/{{ $post->id }}">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                    Like
                </button>
            </form>

            {{-- Bookmark Form --}}
            <form method="POST" action="/blog/bookmark">
                @csrf
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                    Bookmark
                </button>
            </form>
        </div>
    </div>
</article>

