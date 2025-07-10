<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->


<div id="main-content">

	<article>
		<h2>{{ $title }}</h2>
	
	<div>
		<form hx-get="{{ $searchUrl }}" hx-target="#searchResults" hx-trigger="keyup changed delay:500ms" method="GET">
			
			<input type="text" name="searchField" placeholder="type to search...">
			<button type="submit">Search</button>
		</form>
	</div>

	<div>
		<table class="table">
		
			<thead>
				<tr>
					@foreach($tableHeaders as $header)
						<td>{{ $header }}</td>
					@endforeach
				</tr>
			</thead>

			<tbody id="seachResults">
				
			</tbody>
		</table>

</div>
