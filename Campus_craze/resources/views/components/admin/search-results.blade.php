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

	</tr>
</a>
@empty
	<tr>
		<td class="px-6 py-4 text-center" colspan="3">No search user</td>
	</tr>
@endforelse	

