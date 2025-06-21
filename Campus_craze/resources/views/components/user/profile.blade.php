
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->


<main class="flex-4" id="main">

	<article>

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
    <div>

      <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ $user->username }}</h2>
      <p>{{$user->campus}}</p>

    </div>


    <nav aria-label="Profile navigation">
      <ul class="flex space-x-4">
        <li>
          <a
            href="#"
            class="text-gray-700 hover:text-blue-600 transition underline-offset-2 flex-1"
            hx-trigger="click"
            hx-get="{{ route('user.posts.index',['user' => $user->id]) }}"
            hx-swap="outerHTML"
            hx-target="#content"
          >
            Posts
          </a>
        </li>
        <li>
          <a
            href="#"
            class="text-gray-700 hover:text-blue-600 transition underline-offset-2 flex-1"
            hx-trigger="click"
            hx-get="{{ route('user.comments.index',['user' => $user->id ]) }}"
            hx-swap="outerHTML"
            hx-target="#content"
          >
            Comments
          </a>
        </li>
        <li>
          <a
            href="#"
            class="text-gray-700 hover:text-blue-600 transition underline-offset-2 flex-1"
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

	</article>

</main>
