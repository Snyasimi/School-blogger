
    <!-- Be present above all else. - Naval Ravikant -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $title  ?? 'Campus craze'}}</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

	
		<body class="bg-white text-gray-800 font-sans">	

			<header class="bg-blue-600 text-white shadow-md">
				<div class="max-w-6xl mx-auto flex justify-between items-center py-4 px-6">
				  <h1 class="text-2xl font-bold">Campus Craze</h1>
				  <nav class="space-x-4">
					<a href="/" class="hover:underline">Home</a>
					<a href="/login" class="hover:underline">Login</a>
				  </nav>
				</div>
			  </header>

		{{ $slot }}
	
	</body>
	<footer class="flex-1 text-center bg-white">
		Campus craze @ 2025
	</footer>

</html>


