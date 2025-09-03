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
			<span class="text-3xl font-bold text-blue-700">Total number of users</span>
			<span class="mt-2 text-gray-500">{{ $analytics['totalUsers'] }}</span>
		</div>
		<div class="bg-white rounded-xl shadow p-6 flex flex-col items-center justify-center">
			<span class="text-3xl font-bold text-blue-700">Total number of blogs</span>
			<span class="mt-2 text-gray-500">{{ $analytics['totalBlogs'] }}</span>
		</div>
		<div class="bg-white rounded-xl shadow p-6 flex flex-col items-center justify-center">
			<span class="text-3xl font-bold text-blue-700">Reported blogs</span>
			<span class="mt-2 text-gray-500">{{ $analytics['reportedBlogs'] }}</span>
		</div>
	</div>
	
	<!-- Another Dashboard Component -->
	<div class="bg-white rounded-xl shadow p-6">
		<h2 class="text-xl font-semibold text-gray-800 mb-2">Component 2</h2>
		<!-- Component 2 content goes here -->
	</div>
</x-admin.layout>