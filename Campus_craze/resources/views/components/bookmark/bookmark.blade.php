<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<main id="main" class="min-h-screen bg-blue-50 flex flex-col items-center py-10">
    <div class="w-full max-w-3xl bg-white rounded-2xl shadow-lg border border-gray-100">
        <h2 class="text-2xl font-extrabold p-6 border-b text-gray-900 tracking-tight">
            My Bookmarks
        </h2>
        <div id="table-container" class="p-6">
            <x-bookmark.bookmark-table :bookmarks="$bookmarks" />
            {{-- <x-blog.trending :post=$bookmark /> --}}
        </div>
    </div>
</main>