<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="flex flex-col min-h-screen bg-blue-50 text-gray-800">
  <header class="max-h-20 flex flex-col md:flex-row items-center flex-wrap justify-between shadow-sm border-b border-gray-200 flex-1">
    <h1 class="text-4xl font-bold text-black p-8">Campus Craze</h1>

    <nav class="flex flex-row flex-wrap  w-full md:w-1/2">
        <ul class="flex items-center p-0  flex-1">
            <li>
                <a href=""
                   class=" ml-auto text-black px-3 py-2 rounded-md hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('blog.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Home
                </a>
            </li>
            <li>
            <li>
                <a href=""
                   class="text-black px-3 py-2 rounded-md hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('bookmark.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Campus news
                </a>
	    </li>
                <a href=""
                   class="text-black px-3 py-2 rounded-md hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('blog.create') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Create blog
                </a>
	    </li>
            <li>
                <a href=""
                   class="text-black px-3 py-2 rounded-md hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('bookmark.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Bookmarks
                </a>
	    </li>
	@if(Auth::user())
            <li>
                <a href=""
                   class="text-black px-3 py-2 rounded-md hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('user.show', ['user' => Auth::user()->id ]) }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Profile
                </a>
	    </li>
	@endif
            <li>
                <a href=""
                   class="text-black px-3 py-2 rounded-md hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('user.edit', ['user' => Auth::user()->id]) }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Settings
                </a>
            </li>
	@if(Auth::user())
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button
                        class="text-black px-3 py-2 rounded-md hover:bg-red-500 hover:text-white transition"
                        type="submit">
                        Logout
                    </button>
                </form>
            </li>
	@else
            <li>
                <a href="{{ route('loginPage') }}"
                   class="text-white font-medium px-3 py-2 rounded-md hover:bg-blue-600 transition"
                    >Login
                </a>
	    </li>
       @endif
        </ul>
    </nav>
</header>



  <div class="flex flex-col flex-2 md:px-8">

	{{ $slot }}

  </div>

  <footer></footer>
</body>

<script>
    document.body.addEventListener('htmx:configRequest', (event) => {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        event.detail.headers['X-CSRF-TOKEN'] = token;
    });
</script>

</html>

