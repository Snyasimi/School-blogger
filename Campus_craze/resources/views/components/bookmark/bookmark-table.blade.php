<!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->

<table class="border border-gray-400 w-full border-collapse rounded-xl overflow-hidden">
    <thead>
        <tr>
            <td class="text-center p-3 font-bold border border-gray-400 bg-gray-100">Post title</td>
            <td class="text-center p-3 font-bold border border-gray-400 bg-gray-100">Post Author</td>
            <td class="text-center p-3 font-bold border border-gray-400 bg-gray-100">Post Likes</td>
            <td class="text-center p-3 font-bold border border-gray-400 bg-gray-100">Action</td>
        </tr>
    </thead>
    <tbody>
    @forelse($bookmarks as $bookmark)
        <tr class="bg-white hover:bg-gray-50 transition rounded-xl">
            <td class="text-center p-3 border border-gray-400 break-words">{{ $bookmark->post->title }}</td>
            <td class="text-center p-3 border border-gray-400">{{ $bookmark->post->author->username }}</td>
            <td class="text-center p-3 border border-gray-400">{{ $bookmark->post->likes }}</td>
            <td class="text-center p-3 border border-gray-400">
                <button 
                    hx-delete="{{ route('bookmark.destroy', ['bookmark' => $bookmark->id]) }}"
                    class="w-full sm:w-auto px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition duration-200 shadow-sm"
                    hx-trigger="click"
                >
                    Delete
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td class="text-center p-3 border border-gray-400" colspan="4">No Bookmarks</td>
        </tr>
    @endforelse
    </tbody>
</table>