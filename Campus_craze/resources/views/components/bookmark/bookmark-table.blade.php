
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->


<table class="border border-gray-400 w-full table-auto border-collapse  ">
    <thead>
        <td  class="text-center p-3 font-bold border border-gray-400">Post title</td>
        <td  class="text-center p-3 font-bold border border-gray-400">Post Author</td>
        <td  class="text-center p-3 font-bold border border-gray-400">Post Likes</td>

        <td class="text-center p-3 font-bold border border-gray-400"> Action </td>
    </thead>

    @forelse($bookmarks as $bookmark)

    <a href="#">
        <tr class="bg-white rounded-xl">
            
            <td class="text-center p-3 border border-gray-400">{{ $bookmark->post->title }}</td>
            <td  class="text-center p-3 border border-gray-400">{{ $bookmark->post->author->username }}</td>
            <td  class="text-center p-3 border border-gray-400">{{ $bookmark->post->likes}}</td>

            <td  class="text-center p-3 border border-gray-400">
                <ul>
                    <li>
                        <button 
                          hx-delete="{{ route('bookmark.destroy', ['bookmark' => $bookmark->id]) }}"
                          class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-200 shadow-sm"
                          hx-trigger="click"
                        >
                          Delete
                        </button>
                      </li>
                      
                    
                </ul>
            
    
        </tr>	

    </a>
    @empty
    
        <tr>
            <td>No Bookmarks</td>
        
    @endforelse

</table>