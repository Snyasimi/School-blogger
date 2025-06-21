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
  <header class=" flex items-center flex-wrap justify-between px-6 py-4 bg-blue-500 shadow-sm border-b border-gray-200 w-full">
    <h1 class="text-2xl font-bold text-white">Campus Craze</h1>

    <nav class="flex flex-wrap">
        <ul class="flex items-center space-x-4">
            <li>
                <a href=""
                   class="text-white font-medium px-3 py-2 rounded-md hover:bg-blue-600 transition"
                   hx-trigger="click"
                   hx-get="{{ route('blog.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Home
                </a>
            </li>
            <li>
                <a href=""
                   class="text-white font-medium px-3 py-2 rounded-md hover:bg-blue-600 transition"
                   hx-trigger="click"
                   hx-get="{{ route('bookmark.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Bookmarks
                </a>
            </li>
            <li>
                <a href=""
                   class="text-white font-medium px-3 py-2 rounded-md hover:bg-blue-600 transition"
                   hx-trigger="click"
                   hx-get="{{ route('user.show', ['user' => 1]) }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Profile
                </a>
            </li>
            <li>
                <a href=""
                   class="text-white font-medium px-3 py-2 rounded-md hover:bg-blue-600 transition"
                   hx-trigger="click"
                   hx-get="{{ route('user.edit', ['user' => 1]) }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                    Settings
                </a>
            </li>
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button
                        class="text-white font-medium px-3 py-2 rounded-md hover:bg-red-600 transition"
                        type="submit">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</header>



  <div class="flex flex-col flex-2">
  



	{{ $slot }}
   <!--  <main class="flex-4 w-full bg-white shadow-lg p-4" id="main">
       Main content goes here 
   
    </main> -->
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

