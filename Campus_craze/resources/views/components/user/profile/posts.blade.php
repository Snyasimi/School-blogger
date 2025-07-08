
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

	<section id="content" class="bg-blue-50 p-4">
		<h2 class="font-bold text-2xl mb-5 text-center">Posts</h2>
		<div class="grid md:grid-cols-3 gap-2 p-4">
	@forelse($posts as $pst)

		{{-- <x-blog.card :post="$pst" /> --}}

		<x-blog.trending :post="$pst" />
	@empty
		<p class="text-gray-600 p-2">No posts available.</p>
	@endforelse
</div>
	</section>
