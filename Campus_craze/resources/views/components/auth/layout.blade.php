
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

	<body class=" flex flex-col bg-blue-50 min-h-screen"> 	

	<header class="text-3xl font-bold bg-white p-6">Campus Craze</header>

		{{ $slot }}
	
	</body>
	<footer class="flex-1 text-center bg-white">
		Campus craze @ 2025
	</footer>

</html>


