    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
<html lang="en">
<head>
  	<meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ $title ?? 'Dashboard' }}</title>
	
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

</head>

<body>

	<header>
		
	</header>

	<main class="flex flex-row">
		<x-admin.navigation/>	
		<div id="main-content" class="flex-3">
			{{ $slot}}	
		</div>
	</main>
	
	<footer>

	</footer>

</body>

</html>
