    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->


@forelse($tableData as $row)


	<tr class="hover:bg-gray-100 even:bg-gray-50">

		<td class="px-6 py-4">
			<a href=""
			hx-get="{{ route('user.show',['user' => $row->id]) }}"
			hx-trigger="click"
			hx-target="#main-content"
			hx-swap="outerHTML"
			class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
			>	
			{{ $row->firstname }}
		</td>
		<td class="px-6 py-4">{{ $row->lastname }}</td>
		<td class="px-6 py-4">{{ $row->username }}</td>
		<td class="px-6 py-4">{{ $row->account_status }}</td>

		<td class="px-6 py-4  whitespace-nowrap">

						            {{-- Delete (set status to "deleted") --}}
<form 
hx-post="{{ route('admin.user.updateStatus', ['user' => $row->id]) }}"
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
hx-post="{{ route('admin.user.updateStatus', ['user' => $row->id]) }}"
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
hx-post="{{ route('admin.user.updateStatus', ['user' => $row->id]) }}"
hx-target="#notification"
hx-swap="outerHTML"
class="inline"
>
@csrf
<input type="hidden" name="status" value="active">
<input type="submit"
       value="Activate"
       class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition cursor-pointer"
>
</form>



		</td>

	</tr>
</a>
@empty
	<tr>
		<td class="px-6 py-4 text-center" colspan="3">No search user</td>
	</tr>
@endforelse	

