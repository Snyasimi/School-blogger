<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

<div id="main-content" class="flex-1 p-6 bg-gray-50 min-h-screen rounded-lg shadow-md flex-3">
	<div id="notification"></div>
	
	<article class="flex flex-col gap-6">
		<h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $title }}</h2>
	
		<div class="flex flex-1 gap-4 mb-6">
			<form 
				hx-get="{{ $searchUrl }}" 
				hx-target="#searchResults"
				hx-swap="innerHTML"
				class="flex-1"
				method="GET"
			>
				<input 
					hx-get="{{ $searchUrl }}"
					hx-target="#searchResults"
					hx-trigger="keyup changed delay:250ms"
					hx-swap="innerHTML"
					type="text" 
					name="searchField" 
					placeholder="Enter username to search..."
					class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-200 transition"
					autocomplete="off"
				>
			</form>
		</div>

		<div class="overflow-x-auto">
			<table class="min-w-full divide-y divide-gray-200 shadow-lg rounded-lg overflow-hidden bg-white">
				<thead class="bg-gray-100">
					<tr>
						@foreach($tableHeaders as $header)
							<th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
								{{ $header }}
							</th>
						@endforeach
					</tr>
				</thead>
				<tbody id="searchResults" class="bg-white divide-y divide-gray-200">
					{{-- Search results will be injected here --}}
				</tbody>
			</table>
		</div>
	</article>
</div>