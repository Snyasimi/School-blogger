<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>

<main class="flex-4" id="main">

	<article>
{{-- <!--		<section>
			<figure>
				<img>
			</figure>

			<div>
				<h2>Steve Solomon</h2>
			
				<div>
					<nav>
						<ul>	
							<li>Posts</li>
							<li>Comments</li>
							<li>Followers</li>
						</ul>
					</nav>		
				</div>	
			</div>	
		</section> --> --}}

		<section class="flex items-center border border-black space-x-6 p-4 bg-white rounded-lg shadow-md">
		  
		  <!-- Section 1: Image -->
		  <figure class="flex-1 h-full">
		    <img src="https://images-assets.nasa.gov/image/P25-037-35/P25-037-35~orig.jpg" alt="Profile picture" class="w-full h-full object-cover rounded-lg border">
		  </figure>

		  <!-- Section 2: Name and nav links -->
		  <div class="border border-black flex-5">
		    <h2 class="text-xl font-bold text-gray-800 mb-4">Steve Solomon</h2>

		    <nav>
		      <ul class="flex justify-evenly text-center space-x-6 text-blue-600 font-semibold">
			<li class="flex-1 p-3 border border-black"><a href="#" class="block">Posts</a></li>
			<li class="flex-1 p-3 border border-black"><a href="#" class="block">Comments</a></li>
			<li class="flex-1 p-3 border border-black"><a href="#" class="block">Followers</a></li>
		      </ul>
		    </nav>
		  </div>

		</section>


		<section id="section" class="bg-blue-50 p-3">
			<h2 class="font-bold text-lg mb-5">Posts</h2>
			<x-blog.card/>
		</section>

	</article>

</main>
