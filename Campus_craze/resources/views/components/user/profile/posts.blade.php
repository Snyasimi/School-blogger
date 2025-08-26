
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

	<section id="content" class="bg-white p-4 rounded-xl shadow border border-gray-200">
		<h2 class="font-bold text-2xl mb-5 text-center text-black">Posts</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4">
		  @forelse($posts as $pst)
			<x-blog.trending :post="$pst" />
		  @empty
			<div class="col-span-full flex justify-center items-center">
			  <p class="text-gray-700 p-6 text-center bg-gray-100 rounded-lg shadow">No posts available.</p>
			</div>
		  @endforelse
		</div>
	  </section>