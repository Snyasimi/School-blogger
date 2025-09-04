<x-admin.layout>
	<x-slot:title>
		Dashboard 1
	</x-slot>

    <!-- Admin Home Dashboard Header -->
    <header class="m-8 p-4">
        <h1 class="text-3xl font-bold text-gray-800">Admin Home Dashboard</h1>
        <p class="text-gray-500 mt-2">Welcome to your administration dashboard. Here you can view analytics and manage components.</p>
    </header>

	<!-- Dash
		board Analytics Section -->
		
	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
		<div class="bg-white rounded-xl shadow p-6 flex flex-col items-center justify-center">
			<span class="text-xl font-bold text-blue-700">Total number of users</span>
			<span class="mt-2 text-gray-500 text-2xl">{{ $analytics['totalUsers'] }}</span>
		</div>
		<div class="bg-white rounded-xl shadow p-6 flex flex-col items-center justify-center">
			<span class="text-xl font-bold text-blue-700">Total number of blogs</span>
			<span class="mt-2 text-gray-500 text-2xl">{{ $analytics['totalBlogs'] }}</span>
		</div>
		<div class="bg-white rounded-xl shadow p-6 flex flex-col items-center justify-center">
			<span class="text-xl font-bold text-blue-700">Reported blogs</span>
			<span class="mt-2 text-gray-500 text-2xl">{{ $analytics['reportedBlogs'] }}</span>
		</div>
	</div>
	
	<!-- Another Dashboard Component -->
	<div class="bg-white rounded-xl shadow p-6">
	
		<section>
			<h2 class="text-3xl font-extrabold p-4 text-blue-900">posts</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
				@forelse($trendingPosts as $post)
					<x-blog.trending :post="$post" />
				@empty
					<p class="text-gray-600 p-2 bg-white rounded-lg shadow">There are no posts. Create one <a href="{{ route('posts.create') }}" class="underline text-blue-600">here</a>.</p>
				@endforelse
			</div>
		</section>

		
	</div>
</x-admin.layout>