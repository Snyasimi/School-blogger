
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<!--
	<section id="content" class="bg-blue-50 p-4">
		{{-- <h2 class="font-bold text-2xl mb-5 text-center">{{ $user->username."'s comments" }}</h2> --}}
		<div class="grid md:grid-cols-3 gap-2 p-4">
	{{-- @forelse($user->posts as $pst) --}}
		{{-- <x-blog.card :post="$pst" /> --}}

	{{--	<x-blog.trending :post="$pst" /> --}}
	{{-- @empty --}}
		<p class="text-gray-600 p-2">No posts available.</p>
	{{-- @endforelse --}}
</div>
	</section> -->

<section id="content" class="bg-blue-50 p-4">

	@forelse( $comment->comments as $comment )
	<div class="bg-gray-100 p-4 rounded-lg">
		<p class="text-gray-800">{{ $comment->content }}</p>
	  <p class="text-sm text-gray-500">Posted by {{ $comment->author->username }}</p>
	  <span class="text-sm text-gray-500">On {{ \Carbon\Carbon::parse($comment->created_at)->toDayDateTimeString() }}</span>
   </div>
   @empty
   <p class="text-gray-600 p-2">No comments available.</p>
   @endforelse
   
  
</section>
  