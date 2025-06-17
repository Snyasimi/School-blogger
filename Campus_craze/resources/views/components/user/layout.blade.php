<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="flex flex-col min-h-screen bg-blue-50 text-gray-800">
  <header class="flex items-center justify-between p-4 bg-white text-white shadow-md border border-b-gray-300 ">
    <h1 class="text-2xl font-bold text-blue-600">Campus Craze</h1>

    <form method="POST" action="/logout">
      @csrf
      <button
        class="bg-blue-50 text-blue-700 font-semibold py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition"
        type="submit">
        Logout
      </button>
    </form>
  </header>

  <div class="flex flex-col flex-2">
  <aside class="flex-1 bg-white shadow-lg min-h-full p-4">
  <!-- Aside Header -->
  <h2 class="text-xl font-semibold text-gray-800 mb-4">Navigation</h2>

  <!-- Nav Links -->
  <nav>
    <ul class="space-y-2">
      <li>
        <a href=""
           class="block bg-blue-50 text-bold font-medium p-1 border-b-2 border-transparent rounded-md text-center hover:bg-blue-500 transition		    hover:text-white transition 
                  hover:white transition"
           hx-trigger="click"
           hx-get="{{ route('blog.index') }}"
           hx-swap="outerHTML"
           hx-target="main">
          Home
        </a>
      </li>
      <li>
        <a href=""
           class="block bg-blue-50 text-bold font-medium p-1 border-b-2 border-transparent rounded-md text-center hover:bg-blue-500 transition		    hover:text-white transition 
		  hover:white transition"           
	   hx-trigger="click"
           hx-get="{{ route('bookmark.index') }}"
           hx-swap="outerHTML"
           hx-target="main">
          Bookmarks
        </a>
      </li>
      <li>
        <a href=""
           class="block bg-blue-50 text-bold font-medium p-1 border-b-2 border-transparent rounded-md text-center hover:bg-blue-500 transition		    hover:text-white transition 
		  hover:white transition"
	    hx-trigger="click"
           hx-get="{{ route('user.show',['user' => 1]) }}"
           hx-swap="outerHTML"
           hx-target="main">
          Profile
        </a>
      </li>
      <li>
        <a href=""
           class="block bg-blue-50 text-bold font-medium p-1 border-b-2 border-transparent rounded-md text-center hover:bg-blue-500 transition		    hover:text-white transition 
		  hover:white transition"
           hx-trigger="click"
           hx-get="{{ route('user.edit',['user'=>1]) }}"
           hx-swap="outerHTML"
           hx-target="main">
          Settings
        </a>
      </li>
    </ul>
  </nav>
</aside>



	{{ $slot }}
   <!--  <main class="flex-4 w-full bg-white shadow-lg p-4" id="main">
       Main content goes here 
   
    </main> -->
  </div>

  <footer></footer>
</body>
</html>

