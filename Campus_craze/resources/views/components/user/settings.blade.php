<main class="flex-2 flex flex-col justify-center">
  <main class="min-h-screen flex items-center justify-center px-4 py-16">
      <div class="form-container w-full max-w-xl bg-white p-8 rounded-2xl shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Update Your information</h2>
  
        <!-- Inside your <main> section, inside the form -->
          <form action="{{ route('register') }}" method="POST" class="space-y-6">
              @csrf
            
              <!-- First & Last Name -->
              <div class="names flex gap-4">
                <div class="flex-1">
                  <label for="firstname" class="block text-sm font-medium">First Name</label>
                  <input type="text" name="firstname" id="first_name" value="{{ old('firstname') }}"
                    class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                  @error('firstname')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                  @enderror
                </div>
            
                <div class="flex-1">
                  <label for="lastname" class="block text-sm font-medium">Last Name</label>
                  <input type="text" name="lastname" id="last_name" value="{{ old('lastname') }}"
                    class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                  @error('lastname')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            
              <!-- Username -->
              <div>
                <label for="username" class="block text-sm font-medium">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                @error('username')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
              </div>
            
       
              <div>
                <label for="campus" class="block text-sm font-medium">Campus</label>
                <input type="text" name="campus" id="campus" value="{{ old('campus') }}"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                @error('campus')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
              </div>

              <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="reg_no" value="{{ old('email') }}"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                @error('reg_no')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
              </div>

              <div>
                <label for="reg_no" class="block text-sm font-medium">Phone Number</label>
                <input type="text" name="phone_number" id="reg_no" value="{{ old('phone_number') }}"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                @error('reg_no')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
              </div>
              
            
              {{--
              <!-- Registration Number -->
              <div>
                <label for="reg_no" class="block text-sm font-medium">Registration Number</label>
                <input type="text" name="reg_no" id="reg_no" value="{{ old('reg_no') }}"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                @error('reg_no')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
              </div>
              --}}
            
              <!-- Password -->
              <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
                @error('password')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
              </div>
            
              <!-- Confirm Password -->
              <div>
                <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="confirm_password" id="password_confirmation"
                  class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
              </div>
            
              <!-- Submit Button -->
              <div class="buttons text-center">
                <button type="submit"
                  class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
                  Update information
                </button>
              </div>
            </form>
            
  
      </div>
    </main>