<!-- Simplicity is an acquired taste. - Katharine Gerould -->

<article class="flex flex-row gap-4 items-center p-4 bg-gradient-to-br from-white via-slate-50 to-slate-100 border border-slate-200 shadow-xl rounded-3xl hover:shadow-2xl hover:border-blue-300 transition duration-300 group">

    <!-- Image Section -->
    <figure>
        <img src="{{ asset('storage/'.$post->image) }}"
             alt="Blog Image"
             class="h-36 w-36 object-cover rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-[1.05] transition-transform duration-300" />
    </figure>

    <!-- Info Section -->
    <div class="flex-1 flex flex-col space-y-2">

        <div>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors duration-200">{{ $post->title }}</h3>
            <p class="text-base text-gray-700 line-clamp-3 mt-1">{{ $post->content }}</p>
            <a href="{{ route('blog.show', $post->id) }}"
               class="inline-block mt-2 text-blue-700 text-sm font-medium underline underline-offset-2 hover:text-blue-900 transition-colors">
                Read full post
            </a>
            <div class="text-sm text-gray-600 pt-2 flex items-center gap-1">
                <span class="text-lg">❤️</span> {{ $post->likes ?? 0 }} Likes
            </div>
        </div>

        <!-- Responsive Button Stack: Column on mobile, row on desktop -->
        <div class="flex flex-col sm:flex-row items-end gap-3 mt-2 w-full">
            {{-- Like Form --}}
            <form method="POST" action="{{ route('post.like.store',['post' => $post->id ] ) }}" class="w-full sm:w-auto">
                @csrf
                <input type="number" hidden name="post_id" value={{ $post->id }}>
                <button type="submit"
                        class="w-full sm:w-auto px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:scale-105 transition-all text-sm font-semibold">
                    Like
                </button>
            </form>

            {{-- Bookmark Form --}}
            <form  
            hx-post="{{ route('bookmark.store') }}"   
            hx-trigger="submit"  
            hx-target="#notification"    
            hx-swap="outerHTML"   
            class="w-full sm:w-auto"
            >

            @csrf

            <input type="text" hidden name="post_id" value="{{ $post->id }}">

            <button type="submit"
            class="w-full sm:w-auto px-5 py-2 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 hover:scale-105 transition-all text-sm font-semibold">

            Bookmark

        </button>

    
        </form>

        </div>
    </div>
</article>