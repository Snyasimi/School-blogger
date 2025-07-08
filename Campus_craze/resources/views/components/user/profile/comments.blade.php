
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

	<section id="content" class="bg-blue-50 p-4">
		<h2 class="font-bold text-2xl mb-5 text-center">{{ $user->username."'s posts" }}</h2>
		<div class="grid md:grid-cols-3 gap-2 p-4">
	@forelse($user->posts as $pst)
		{{-- <x-blog.card :post="$pst" /> --}}

		<x-blog.trending :post="$pst" />
	@empty
		<p class="text-gray-600 p-2">No posts available.</p>
	@endforelse
</div>
	</section>