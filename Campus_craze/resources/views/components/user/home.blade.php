<x-user.layout>
    <main class="p-4 flex-4 bg-gradient-to-br from-blue-50 via-white to-blue-100  min-h-screen" id="main">
        <article class="max-w-7xl mx-auto flex flex-col gap-10">

            {{-- Trending Posts --}}
            <section>
                <h2 class="text-3xl font-extrabold p-4 text-blue-900">Trending Posts</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($trendingPosts as $post)
                        <x-blog.trending :post="$post" />
                    @empty
                        <p class="text-gray-600 p-2 bg-white rounded-lg shadow">There are no trending posts. Create one <a href="{{ route('posts.create') }}" class="underline text-blue-600">here</a>.</p>
                    @endforelse
                </div>
            </section>

            {{-- More Posts --}}
            <section>
                <h2 class="text-3xl font-extrabold p-4 text-blue-900">More Posts</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($posts as $pst)
                    <x-blog.trending :post="$pst" />
                    @empty
                        <p class="text-gray-600 p-2 bg-white rounded-lg shadow">No posts available.</p>
                    @endforelse
                </div>
            </section>
        </article>
    </main>
</x-user.layout>