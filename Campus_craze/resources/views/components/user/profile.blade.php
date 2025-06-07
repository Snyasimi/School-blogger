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

		<section
  id="profile-section"
  class="flex flex-col md:flex-row items-center bg-white rounded-lg shadow-sm p-6 gap-6"
>
  <!-- Section 1: Image -->
  <figure class="w-24 h-24 flex-shrink-0">
    <img
      src="https://images-assets.nasa.gov/image/P25-037-35/P25-037-35~orig.jpg"
      alt="Profile picture"
      class="w-full h-full object-cover rounded-full border border-gray-200"
    />
  </figure>

  <!-- Section 2: Name and nav links -->
  <div class="flex-1">
    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Steve Solomon</h2>

    <nav aria-label="Profile navigation">
      <ul class="flex space-x-4">
        <li>
          <a
            href="#"
            class="text-gray-700 hover:text-blue-600 transition underline-offset-2"
            hx-trigger="click"
            hx-get="{{ route('user.posts.index',['user' => 1]) }}"
            hx-swap="outerHTML"
            hx-target="#content"
          >
            Posts
          </a>
        </li>
        <li>
          <a
            href="#"
            class="text-gray-700 hover:text-blue-600 transition underline-offset-2"
            hx-trigger="click"
            hx-get="{{ route('user.comments.index',['user' => 1]) }}"
            hx-swap="outerHTML"
            hx-target="#content"
          >
            Comments
          </a>
        </li>
        <li>
          <a
            href="#"
            class="text-gray-700 hover:text-blue-600 transition underline-offset-2"
            hx-trigger="click"
            hx-get=""
            hx-swap="outerHTML"
            hx-target="#profile-section"
          >
            Followers
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>




		<section id="content" class="bg-blue-50 p-3">
			<h2 class="font-bold text-lg mb-5">Posts</h2>
			<x-blog.card/>
		</section>

	</article>

</main>
