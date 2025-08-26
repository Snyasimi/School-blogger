<!-- Simplicity is an acquired taste. - Katharine Gerould -->

<article class="flex-1 bg-gradient-to-br from-white via-slate-50 to-slate-100 rounded-2xl border border-slate-200 shadow-lg overflow-hidden flex flex-col hover:shadow-xl hover:border-blue-300 transition-all duration-300 group">
    
    <!-- Image -->
    <a href="{{ route('blog.show', $post->id) }}"
        class="inline-block mt-1">
        <figure>
            <img 
                src="storage/{{ $post->image }}" 
                alt="Blog Image" 
                class="w-full h-52 object-cover rounded-t-2xl shadow-sm group-hover:scale-[1.03] group-hover:shadow-md transition-transform duration-300"
            >
        </figure>
    </a>
   
    <!-- Content -->
    <div class="no-underline p-5 flex flex-col flex-grow justify-between space-y-3">
        <h3 class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors duration-200">{{ $post->title }}</h3>
        <p class="text-base text-gray-700 line-clamp-3">{{ $post->content }}</p>
        <a  hx-get="{{ route('blog.show', $post->id) }}" 
            hx-target="body"
            hx-swap="outerHTML"
            class="block w-fit mt-2 px-4 py-1 rounded bg-black text-white text-xs font-semibold hover:bg-gray-800 transition">
            Read more
        </a>

        <div class="mt-auto flex flex-wrap justify-between items-center gap-3 pt-5 border-t border-gray-200">
            <div class="text-sm text-gray-600 flex items-center gap-1">
                <span class="text-lg">❤️</span> {{ $post->likes ?? 0 }} Likes
            </div>

            <div class="flex flex-row items-end gap-3">
                {{-- Like Form --}}
                <form 
                    hx-post="{{ route('post.like.store', ['post' => $post->id]) }}"
                    hx-target="#notification"
                    hx-swap="innerHTML"
                    >
                    @csrf
                    <input type="number" hidden name="post_id" value="{{ $post->id }}">
                    <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:scale-105 transition-all text-sm font-semibold">
                    Like
                </button>
            </form>
        
                {{-- Bookmark Form --}}
                <form method="POST" action="{{ route('bookmark.store') }}">
                    @csrf
                    <input type="text" hidden name="post_id" value="{{ $post->id }}">
                    <button type="submit"
                            class="px-5 py-2 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 hover:scale-105 transition-all text-sm font-semibold">
                        Bookmark
                    </button>
                </form>
            </div>
        </div>
    </div>
</article>
