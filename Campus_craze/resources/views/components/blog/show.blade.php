<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

<main id="main" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10 px-3 min-h-screen">
	<article class="w-full max-w-4xl p-10 bg-white rounded-2xl shadow-2xl border border-blue-100">
	  <figure class="bg-blue-50 rounded-xl overflow-hidden aspect-video mb-6 border border-blue-100">
		<img class="w-full object-cover" src="{{ asset('storage/'.$blog->image) }}" alt="blog image header">
		<figcaption class="text-center text-xs text-blue-500 py-2">"This is the caption"</figcaption>
	  </figure>
  
	  <section class="mt-2 space-y-4">
		<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-4">
		  <!-- Left: Blog title, author, and date -->
		  <div>
			<h2 class="text-3xl font-bold text-blue-900 mb-1">{{ $blog->title }}</h2>
			<div class="flex items-center gap-2 mb-1">
			  <p class="text-sm text-blue-600 m-0">
				By <span class="font-medium">{{ $blog->author->username }}</span>
			  </p>
			  <a 
			  hx-trigger="click"
			  hx-get="{{ route('user.show', ['user' => $blog->author->id ]) }}"
			  hx-swap="outerHTML"
			  hx-target="main"
				class="inline-block bg-blue-600 text-white text-xs font-semibold px-4 py-2 rounded-xl shadow transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400"
				aria-label="View Profile"
			  >
				View Profile
			  </a>
			</div>
			<p class="text-sm text-blue-400">{{ now()->format('F j, Y \a\t g:i A') }}</p>
		  </div>
		  <!-- Right: Like and Bookmark forms -->
		  <div class="flex gap-2">
			<!-- Like Form -->
			<form 
			method="POST" 
			hx-post="{{ route('post.like.store', ['post' => $blog->id]) }}" 
			id="like-btn-{{ $blog->id }}"
			>
    @csrf
    <button type="submit" class="inline-flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-xl shadow transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
        </svg>
        Like
    </button>
</form>

<form 
    method="POST" 
    hx-post="{{ route('bookmark.store') }}" 
   
    id="bookmark-btn-{{ $blog->id }}"
>
    @csrf
    <button type="submit" class="inline-flex items-center gap-1 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-5 py-2 rounded-xl shadow transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5 3a2 2 0 00-2 2v14l7-4 7 4V5a2 2 0 00-2-2H5z"/>
        </svg>
        Bookmark
    </button>
</form>
		  </div>
		</div>
  
		<!-- Blog Content (rendered as HTML) -->
		<div class="prose max-w-none">
		  {!! $blog->content !!}
		</div>
	  </section>
  
	  <section class="mt-12">
		<h3 class="text-xl font-semibold text-blue-900 mb-4">Join the conversation</h3>
		<form class="space-y-3" method="POST" action="{{ route('comment.store') }}">
		  @csrf
		  <input type="hidden" name="post_id" value="{{ $blog->id }}" />
		  <input type="text" name="content" class="w-full p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Write a comment...">
		  <button type="submit" class="bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white px-6 py-2 rounded-xl font-semibold shadow hover:from-blue-600 hover:to-blue-800 transition">
			Comment
		  </button>
		</form>
	  </section>
  
	  <section class="mt-10">
		<h3 class="text-lg font-medium text-blue-800 mb-4">Comments</h3>
		<div class="flex flex-col gap-3">
		  {{-- Comments component --}}
		  @forelse($blog->comment as $comment)
			<x-blog.comment :comment="$comment" />
		  @empty
			<span class="text-blue-400">No comments</span>
		  @endforelse
		</div>
	  </section>
	</article>
  </main>