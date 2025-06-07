<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Add your CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@vite('resources/css/app.css')
  	@vite('resources/js/app.js')
</head>
<body class="bg-white text-gray-800 font-sans">

    {{-- Blog Header --}}
    <x-blog.header />

    {{-- Main content, every child will define their main section --}}
	
	@yield('content')

    {{-- Footer --}}
    <footer class="border-t mt-10 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Campus Craze . All rights reserved.
    </footer>

</body>
</html>

