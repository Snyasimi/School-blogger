    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->


<main id="main" class="flex flex-col items-center justify-center bg-blue-50 p-3">

	<article class="flex flex-col mx-auto w-2/3 p-4 bg-white  rounded-xl">
		<figure class="flex-1 bg-gray-100 overflow-hidden" >
			<img class="w-full" src="{{ asset('storage/'.$blog->image) }}" alt="blog image header">
			<figcaption>"This is the caption"</figcaption>
		</figure>

		<section class="flex-2  mt-6 space-y-4">
			<div class="flex items-start justify-between mb-6">
				    {{-- Left: Blog title, author, and date --}}
				    <div>
					<h2 class="p-1 text-3xl font-bold text-gray-900">{{ $blog->title }}</h2>
					<p class="p-1 text-sm text-gray-600">By <span class="font-medium">{{ $blog->author->username }}</span></p>
					<p class="p-1text-sm text-gray-500">{{ now()->format('F j, Y \a\t g:i A') }}</p>
				    </div>

			    {{-- Right: Like and Bookmark forms --}}
			    <div class="flex space-x-2">
				{{-- Like Form --}}
				<form method="POST" action="/blog/like">
				    @csrf
				    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
					Like
				    </button>
				</form>

				{{-- Bookmark Form --}}
				<form method="POST" action="/blog/bookmark">
				    @csrf
				    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded">
					Bookmark
				    </button>
				</form>
			    </div>
			</div>

			{{-- RENDER THE BLOG POST HERE AS RAW HTML--}}
			<div class="prose">

				{{ $blog->content }}
			</div>
		</section>

		<section class="mt-10 space-y-6">
			<h3 class="text-xl font-semibold text-gray-900" >Join the conversation</h3>
			<form class="space-y-4" method=POST action={{ route('comment.store')}} >
			@csrf
				<input type="text" name="post_id" value="{{ $blog->id }}" hidden />
				<input type="text" name="content" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
				<button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700" >Comment</button>
			</form>

		<section class="mt-8">
			<h3 class="text-lg font-medium text-gray-800 mb-4 ">Comments</h3>
			
			<div class="flex flex-col gap-2">
				{{-- Comments component--}}
				@forelse($blog->comment as $comment)
					<x-blog.comment :comment=$comment />
				@empty
					No comments
				@endforelse
			</div>
			

		</section>
	</article>
</main>
