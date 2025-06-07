
<main class="flex-4 bg-blue-50 p-4" id="main">

    <article class="max-w-7xl mx-auto space-y-10">

        {{-- Trending Posts --}}
        <section>
            <h2 class="text-2xl font-bold p-4">Trending Posts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Example of using blog card component 9 times --}}
	    	
		@forelse($trendingPosts as $post)
			
			<x-blog.trending :post=$post />
		
		@empty
			<p> There seems to be no posts create one <u>here</u>
		
		
		@endforelse
		
            </div>
        </section>

        {{-- More Posts --}}
        <section>
            <h2 class="text-2xl font-bold mb-4">More Posts</h2>
	    <div class="flex flex-col gap-2">
			@forelse($posts as $pst)
	
        			<x-blog.card :post=$pst />
			@empty
				<p>No posts</p>
			@endforelse
                {{-- Add more <x-blog.card /> if needed --}}
            </div>
        </section>
    </article>
</main>
