<x-user.layout>

    <main class="flex-4 bg-blue-50 p-4" id="main">
        <article class="max-w-7xl mx-auto space-y-10">

            {{-- Trending Posts --}}
            <section>
                <h2 class="text-2xl font-bold p-4">Trending Posts</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($trendingPosts as $post)
                        <x-blog.trending :post="$post" />
                    @empty
                        <p class="text-gray-600 p-2">There are no trending posts. Create one <a href="{{ route('posts.create') }}" class="underline text-blue-600">here</a>.</p>
                    @endforelse
                </div>
            </section>

            {{-- More Posts --}}
            <section>
                <h2 class="text-2xl font-bold mb-4">More Posts</h2>

                <div class="flex flex-col flex-wrap gap-2">
                    @forelse($posts as $pst)
                        <x-blog.card :post="$pst" />
                    @empty
                        <p class="text-gray-600 p-2">No posts available.</p>
                    @endforelse
                </div>
            </section>

        </article>
    </main>

</x-user.layout>
