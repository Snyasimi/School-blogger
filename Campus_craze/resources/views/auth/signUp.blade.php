<x-auth.layout>
  <x-slot name="title">
    Sign Up
  </x-slot>

  <main class="min-h-screen flex items-center justify-center bg-gray-50 px-4 py-16">
    <div class="w-full max-w-lg bg-white p-10 rounded-2xl shadow-lg border border-gray-100">
      <h2 class="text-3xl font-bold mb-8 text-center text-blue-700 tracking-tight">Create Your Account</h2>
      <form action="{{ route('register') }}" method="POST" class="space-y-6">
        @csrf

        <!-- First & Last Name -->
        <div class="flex gap-4">
          <div class="flex-1">
            <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}"
              class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
              required>
            @error('firstname')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex-1">
            <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}"
              class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
              required>
            @error('lastname')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <!-- Username -->
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" name="username" id="username" value="{{ old('username') }}"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
            required>
          @error('username')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        
        <!-- Campus -->
        <div>
          <label for="campus" class="block text-sm font-medium text-gray-700">Campus</label>
          <input type="text" name="campus" id="campus" value="{{ old('campus') }}"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
            required>
          @error('campus')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" value="{{ old('email') }}"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
            required>
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Phone Number -->
        <div>
          <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
          <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
            required>
          @error('phone_number')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" id="password"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
            required>
          @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Confirm Password -->
        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation"
            class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-200 outline-none transition"
            required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold shadow hover:bg-blue-700 transition">
            Sign Up
          </button>
        </div>
      </form>
    </div>
  </main>
</x-auth.layout>