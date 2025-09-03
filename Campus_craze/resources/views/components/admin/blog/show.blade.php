<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

<main id="main-content" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10 px-3 min-h-screen">
	
    <div id="notification"></div>

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
			          {{-- Delete (set status to "deleted") --}}
<form 
hx-post="{{ route('admin.blog.updateStatus', ['blog' => $blog->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="flagged">
<input type="submit"
       value="Flag"
       class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition cursor-pointer"
>
</form>

{{-- Ban (set status to "banned") --}}
<form 
hx-post="{{ route('admin.blog.updateStatus', ['blog' => $blog->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="banned">
<input type="submit"
       value="Ban"
       class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition cursor-pointer"
>
</form>

{{-- Restore (set status to "normal") --}}
<form 
hx-post="{{ route('admin.blog.updateStatus', ['blog' => $blog->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="normal">
<input type="submit"
       value="Restore"
       class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition cursor-pointer"
>
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