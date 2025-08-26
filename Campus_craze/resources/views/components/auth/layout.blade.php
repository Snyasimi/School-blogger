<!-- Be present above all else. - Naval Ravikant -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'Camps Craze' }}</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 text-gray-800">

  <header class="sticky top-0 z-50 w-full bg-gradient-to-r from-slate-50 via-blue-100 to-blue-50 shadow-md border-b border-slate-200 flex flex-col md:flex-row items-center justify-between py-6 px-8">
      <h1 class="text-4xl font-extrabold text-blue-900 mb-4 md:mb-0">Campus Craze</h1>
      <nav class="w-full md:w-auto">
        <ul class="flex flex-wrap gap-2 md:gap-4 items-center justify-end">
          <li>
            <a href="{{ route('loginPage') }}"
               class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition">
              Login
            </a>
          </li>

          <li>
            <a href="{{ route('signUpPage') }}"
               class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition">
              Sign up
            </a>
          </li>
         
        </ul>
      </nav>
    </header>

    <main class="flex flex-col flex-2 md:px-12 py-8 w-full max-w-5xl mx-auto">
      {{ $slot }}
    </main>

    <footer class="mt-auto w-full py-6 text-center text-gray-500 bg-slate-50 border-t border-slate-200">
      <!-- Footer content can go here -->
      &copy; {{ date('Y') }} Campus Craze. All rights reserved.
    </footer>

    <script>
      document.body.addEventListener('htmx:configRequest', (event) => {
          const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          event.detail.headers['X-CSRF-TOKEN'] = token;
      });
    </script>
</body>
</html>