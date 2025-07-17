<x-auth.layout>
  <x-slot name="title">
    Login
  </x-slot>

  <main class="min-h-screen flex items-center justify-center bg-gray-50 px-4 py-16">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
      <!-- Simple, elegant heading without colored banner -->
      <h1 class="text-2xl font-semibold text-center mb-6 text-gray-900 tracking-tight">
        Sign in to your account
      </h1>
      <form action="{{ route('authenticate') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Username or Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Username or Email
          </label>
          <input
            type="text"
            name="email"
            id="login"
            value="{{ old('login') }}"
            autocomplete="username"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:border-blue-400 outline-none transition"
            required
          >
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <input
            type="password"
            name="password"
            id="password"
            autocomplete="current-password"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:border-blue-400 outline-none transition"
            required
          >
          @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold shadow hover:bg-blue-700 transition"
          >
            Login
          </button>
        </div>
      </form>
    </div>
  </main>
</x-auth.layout>