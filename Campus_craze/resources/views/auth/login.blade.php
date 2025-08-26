<x-auth.layout>
  <x-slot name="title">
    Login
  </x-slot>

  <div class="flex items-center justify-center min-h-[70vh]">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 border border-blue-100">
      <h1 class="text-2xl font-bold text-center mb-6 text-blue-800 tracking-tight">
        Sign in to your account
      </h1>
      <form action="{{ route('authenticate') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Username or Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-blue-700">
            Username or Email
          </label>
          <input
            type="text"
            name="email"
            id="login"
            value="{{ old('login') }}"
            autocomplete="username"
            class="w-full mt-1 p-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 outline-none transition"
            required
          >
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-blue-700">
            Password
          </label>
          <input
            type="password"
            name="password"
            id="password"
            autocomplete="current-password"
            class="w-full mt-1 p-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 outline-none transition"
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
            class="w-full bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white py-3 rounded-xl font-semibold shadow hover:from-blue-600 hover:to-blue-800 transition"
          >
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
</x-auth.layout>