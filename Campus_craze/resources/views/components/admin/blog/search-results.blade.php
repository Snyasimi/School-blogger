@forelse($tableData as $row)
    <tr class="hover:bg-gray-100 even:bg-gray-50 transition">
        <td class="px-6 py-4 whitespace-nowrap font-semibold">
            <a 
                href="#"
                hx-get="{{ route('admin.showBlog', ['blog' => $row->id]) }}"
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
                hx-get="{{ route('user.show', ['user' => $row->author->id]) }}"
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

        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-600">
            {{ $row->reports }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{-- Delete (set status to "deleted") --}}
<form 
hx-post="{{ route('admin.blog.updateStatus', ['blog' => $row->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="flagged">
<input type="submit"
       value="Flag"
       class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition cursor-pointer"
>
</form>

{{-- Ban (set status to "banned") --}}
<form 
hx-post="{{ route('admin.blog.updateStatus', ['blog' => $row->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="banned">
<input type="submit"
       value="Ban"
       class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition cursor-pointer"
>
</form>

{{-- Restore (set status to "normal") --}}
<form 
hx-post="{{ route('admin.blog.updateStatus', ['blog' => $row->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="normal">
<input type="submit"
       value="Restore"
       class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition cursor-pointer"
>
</form>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td class="px-6 py-4 text-center text-gray-500" colspan="4">No blogs</td>
    </tr>
@endforelse