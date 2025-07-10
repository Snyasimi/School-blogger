    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->


@forelse($tableData as $row)
	<tr>
		<td>{{ $row->firstname }}</td>
		<td>{{ $row->lastname }}</td>
		<td>{{ $row->username }}</td>
	</tr>
@empty
	<tr>
		<td>Search for a user</td>
	</tr>
@endforelse	

