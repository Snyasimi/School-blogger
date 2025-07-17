<!-- Be present above all else. - Naval Ravikant -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $title ?? 'Camps Craze' }}</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body class="bg-white text-gray-800 font-sans min-h-screen flex flex-col">
  <!-- Elegant, minimal header -->
  <header class="border-b shadow-sm bg-white">
    <div class="max-w-5xl mx-auto flex justify-between items-center py-5 px-6">
      <h1 class="text-2xl font-extrabold tracking-tight text-gray-900">Camps Craze</h1>
      <nav class="space-x-6">
        <a href="/" class="text-gray-700 hover:text-blue-600 transition font-medium">Home</a>
        <a href="/login" class="text-gray-700 hover:text-blue-600 transition font-medium">Login</a>
      </nav>
    </div>
  </header>

  <main class="flex-1 w-full max-w-2xl mx-auto px-4 py-8">
    {{ $slot }}
  </main>

  <footer class="border-t mt-8 bg-white">
    <div class="max-w-5xl mx-auto py-6 px-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <span class="text-gray-500 text-sm">&copy; {{ date('Y') }} Camps Craze. All rights reserved.</span>
      <span class="text-gray-400 text-xs italic">Made with passion for campus life.</span>
    </div>
  </footer>
</body>
</html>