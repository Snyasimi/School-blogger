
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<main id="main" class="flex-4 bg-blue-50" >

	<h2 class="bg-white text-2xl font-bold p-4">My Bookmarks</h2>
	
	<div  id="table-container"class="bg-blue-50 p-4 m-h-full">	

		<x-bookmark.bookmark-table :bookmarks="$bookmarks" />
			{{-- <x-blog.trending :post=$bookmark /> --}}
	
	</div>
</main>
