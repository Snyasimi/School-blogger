@forelse($tableData as $row)
    <tr class="hover:bg-gray-100 even:bg-gray-50 transition">
        <td class="px-6 py-4 whitespace-nowrap font-semibold">
            <a 
                href="#"
                hx-get="{{ route('user.show', ['user' => $row->title]) }}"
                hx-trigger="click"
                hx-target="#main-content"
                hx-swap="outerHTML"
                class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
            >	
                {{ $row->title }}
            </a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <a 
                href="#"
                hx-get="{{ route('user.show', ['user' => $row->title]) }}"
                hx-trigger="click"
                hx-target="#main-content"
                hx-swap="outerHTML"
                class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
            >	
                {{ $row->author->username }}
            </a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-600">
            {{ $row->likes }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex gap-2">
                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">Delete</button>
                <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">Ban</button>
                <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition">Restore</button>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td class="px-6 py-4 text-center text-gray-500" colspan="4">No blogs</td>
    </tr>
@endforelse