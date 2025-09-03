<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Campus Craze</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 text-gray-800 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="sticky top-0 z-50 bg-gradient-to-r from-slate-50 via-blue-100 to-blue-50 shadow-md border-b border-slate-200 flex items-center justify-between py-6 px-8">
    <h1 class="text-4xl font-extrabold text-blue-900">Campus Craze</h1>
    
    <nav class="flex gap-4">
      <a href="#features" class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition">Features</a>
      <a href="#about" class="text-blue-900 font-semibold px-5 py-2 rounded-xl hover:bg-blue-500 hover:text-white transition">About</a>
      <a href="{{ route('signUpPage') }}" class="bg-blue-600 text-white px-5 py-2 rounded-xl font-semibold shadow hover:bg-blue-700 transition">Sign Up</a>
      <a href="{{ route('loginPage') }}" class="bg-blue-600 text-white px-5 py-2 rounded-xl font-semibold shadow hover:bg-blue-700 transition">Login</a>

    </nav>
    
  </header>

  <!-- Hero -->
  <section class="flex flex-col items-center justify-center text-center py-24 bg-gradient-to-br from-blue-100 via-white to-blue-50 px-4 border-b border-blue-100">
    <h2 class="text-5xl font-extrabold text-blue-900 mb-5">Write. Express</h2>
    <p class="text-xl text-blue-800 mb-8 max-w-2xl">A platform where journalism students turn thoughts into powerful stories and sharpen their writing skills.</p>
    <a href="{{ route('signUpPage') }}" class="bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white px-8 py-4 rounded-2xl font-bold shadow-lg hover:from-blue-600 hover:to-blue-800 transition text-lg">Start Writing Today</a>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 px-6 max-w-6xl mx-auto">
    <h3 class="text-4xl font-bold text-blue-900 text-center mb-12">Why Campus Craze?</h3>
    <div class="grid md:grid-cols-3 gap-10">
      <div class="p-8 rounded-2xl shadow-xl border border-blue-100 bg-white flex flex-col items-center">
        <h4 class="text-xl font-bold text-blue-800 mb-3">Practice Writing</h4>
        <p class="text-gray-700 text-center">Improve your writing style and storytelling through regular blog posts.</p>
      </div>
      <div class="p-8 rounded-2xl shadow-xl border border-blue-100 bg-white flex flex-col items-center">
        <h4 class="text-xl font-bold text-blue-800 mb-3">Get Feedback</h4>
        <p class="text-gray-700 text-center">Engage with peers and receive comments to help refine your skills.</p>
      </div>
      <div class="p-8 rounded-2xl shadow-xl border border-blue-100 bg-white flex flex-col items-center">
        <h4 class="text-xl font-bold text-blue-800 mb-3">Build Your Portfolio</h4>
        <p class="text-gray-700 text-center">Create a body of work that you can showcase to future employers or schools.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-auto bg-gradient-to-r from-slate-50 via-blue-100 to-blue-50 border-t border-slate-200 text-center text-gray-500 py-8">
    <p>&copy; 2025 Campus Craze. All rights reserved.</p>
  </footer>

</body>
</html>