<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

<main class="flex flex-col flex-2 md:px-12 py-8 w-full max-w-5xl mx-auto">
  <article>

    <!-- Profile Section -->
    <section
      id="profile-section"
      class="flex flex-col md:flex-row items-center bg-white rounded-2xl shadow-lg p-8 gap-8 border border-gray-200"
      aria-label="User profile"
    >
      <!-- Section 1: Image -->
      <figure class="flex-shrink-0 self-center md:self-start border-2 border-gray-300 rounded-full overflow-hidden h-40 w-40 bg-gray-100 shadow">
        <img
          src="{{ $user->image ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->username) }}"
          alt="Profile picture of {{ $user->username }}"
          class="h-full w-full object-cover rounded-full"
        />
      </figure>

      <!-- Section 2: Name and nav links -->
      <div class="flex-1 w-full md:w-auto flex flex-col gap-6">
        <div class="mb-2">
          <h2 class="text-3xl font-bold text-black mb-1">{{ $user->username }}</h2>
          <p class="text-lg text-black font-medium">{{ $user->campus ?? 'No campus info' }}</p>
        </div>

        <nav aria-label="Profile navigation">
          <ul class="flex flex-col md:flex-row gap-3 md:gap-6">
            <li>
              <a
                href="#"
                class="px-4 py-2 bg-gray-100 rounded-xl text-black font-semibold hover:bg-black hover:text-white transition-colors duration-150 underline-offset-2 text-center"
                hx-trigger="click"
                hx-get="{{ route('user.posts.index',['user' => $user->id]) }}"
                hx-swap="outerHTML"
                hx-target="#content"
                aria-current="page"
              >
                Posts
              </a>
            </li>
            <li>
              <a
                href="#"
                class="px-4 py-2 bg-gray-100 rounded-xl text-black font-semibold hover:bg-black hover:text-white transition-colors duration-150 underline-offset-2 text-center"
                hx-trigger="click"
                hx-get="{{ route('user.comments.index',['user' => $user->id ]) }}"
                hx-swap="outerHTML"
                hx-target="#content"
              >
                Comments
              </a>
            </li>
            {{-- <li>
              <a
                href="#"
                class="px-4 py-2 bg-gray-100 rounded-xl text-black font-semibold hover:bg-black hover:text-white transition-colors duration-150 underline-offset-2 text-center"
                hx-trigger="click"
                hx-get=""
                hx-swap="outerHTML"
                hx-target="#profile-section"
              >
                Followers
              </a>
            </li> --}}
          </ul>
        </nav>
      </div>
    </section>

    <section id="content" class="bg-white p-6 rounded-xl mt-8 shadow" aria-label="User posts">
      <h2 class="font-bold text-2xl mb-6 text-center text-black">{{ $user->username."'s posts" }}</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($user->posts as $pst)
          <x-blog.trending :post="$pst" />
        @empty
          <p class="text-gray-600 p-2 text-center bg-gray-100 rounded-lg shadow">No posts available.</p>
        @endforelse
      </div>
    </section>

  </article>
</main>