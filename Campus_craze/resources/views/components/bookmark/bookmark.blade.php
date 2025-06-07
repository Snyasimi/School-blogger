
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<main id="main" class="flex-4 bg-blue-50" >

	<h2 class="bg-white p-8 rounded-xl">My Bookmarks</h2>
	
	<div class="bg-blue-50 p-4 m-h-full">

		@forelse($bookmarks as $bookmark)
			<x-blog.card :post=$bookmark />
		@empty
			<p>No bookmarks</p>
		@endforelse
	</div>
</main>
