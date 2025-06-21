<x-auth.layout>
	<x-slot:title>
		Login
	</x-slot>


  <main class="min-h-screen flex items-center justify-center px-4 py-16">

		
		<form action="{{ route('authenticate') }}" method="POST" class="space-y-6">
      @csrf
    
      <!-- Username or Email -->
      <div>
        <label for="login" class="block text-sm font-medium">Username or Email</label>
        <input type="text" name="email" id="login" value="{{ old('login') }}"
          class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>
    
      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium">Password</label>
        <input type="password" name="password" id="password"
          class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>
    
      <!-- Submit Button -->
      <div class="buttons text-center">
        <button type="submit"
          class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
          Login
        </button>
      </div>
    </form>

	

	</main>

</x-layout>
