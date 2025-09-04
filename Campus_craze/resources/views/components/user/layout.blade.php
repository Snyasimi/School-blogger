<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
 
  
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 text-gray-800">

    <header class="sticky top-0 z-50 w-full bg-gradient-to-r from-slate-50 via-blue-100 to-blue-50 shadow-md border-b border-slate-200 flex flex-col md:flex-row items-center justify-between py-6 px-8">
        <h1 class="text-4xl font-extrabold text-green-900 mb-4 md:mb-0">Campus Blog</h1>
        <nav class="w-full md:w-auto">
          <ul class="flex flex-wrap gap-2 md:gap-4 items-center justify-end">
            <li>
              <a href=""
                 class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition"
                 hx-trigger="click"
                 hx-get="{{ route('homefeed') }}"
                 hx-swap="outerHTML"
                 hx-target="body">
                Home
              </a>
            </li>
           
            @if(Auth::user())

            {{-- <li>
                <a href=""
                   class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('bookmark.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                  Campus news
                </a>
              </li> --}}
              <li>
                <a href=""
                   class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('blog.create') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                  Create blog
                </a>
              </li>
              <li>
                <a href=""
                   class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition"
                   hx-trigger="click"
                   hx-get="{{ route('bookmark.index') }}"
                   hx-swap="outerHTML"
                   hx-target="main">
                  Bookmarks
                </a>
              </li>

            <li>
              <a href=""
                 class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition"
                 hx-trigger="click"
                 hx-get="{{ route('user.show', ['user' => Auth::user()->id ]) }}"
                 hx-swap="outerHTML"
                 hx-target="main">
                Profile
              </a>
            </li>
            <li>
              <a href=""
                 class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition"
                 hx-trigger="click"
                 hx-get="{{ route('user.edit', ['user' => Auth::user()->id]) }}"
                 hx-swap="outerHTML"
                 hx-target="main">
                Settings
              </a>
            </li>
            <li>
              <form method="POST" action="/logout">
                @csrf
                <button
                  class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-red-500 hover:text-white transition"
                  type="submit">
                  Logout
                </button>
              </form>
            </li>
            @else
            <li>
              <a href="{{ route('loginPage') }}"
                 class="text-white font-semibold px-5 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 transition">
                Login
              </a>
            </li>
            @endif
          </ul>
        </nav>
      </header>
	<div id="notification" ></div>

  <main class="flex flex-col flex-2 md:px-12 py-8 w-full max-w-5xl mx-auto">
    {{ $slot }}
  </main>

  <footer class="mt-auto w-full py-6 text-center text-gray-500 bg-slate-50 border-t border-slate-200">
    <!-- Footer content can go here -->
  </footer>
</body>

<script>
    document.body.addEventListener('htmx:configRequest', (event) => {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        event.detail.headers['X-CSRF-TOKEN'] = token;
    });
</script>



</html>
