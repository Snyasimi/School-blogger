<main class="min-h-screen flex items-center justify-center px-4 py-16">
  <div class="w-full max-w-xl space-y-12">

    <!-- Update Details Form -->
    <div class="form-container bg-white p-8 rounded-2xl shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Update Details</h2>
	<small class="" id="notification"></small>
      <form 
        hx-post="{{ route('updateDetails',['user' => $user->id ]) }}" 
        hx-target="#notification" 
	hx-swap="outerHTML"
	hsx-trigger="target:detailsBtn"
        enctype="multipart/form-data" 
        method="POST"
        class="space-y-6"
      >
        @csrf

        <div class="names flex gap-4">
          <div class="flex-1">
            <label for="firstname" class="block text-sm font-medium">First Name</label>
            <input type="text" name="firstname" id="first_name" value="{{ old('firstname', $user->firstname ?? '') }}"
              class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
            <p class="text-xs text-gray-500 mt-1">Enter your given name. Example: John.</p>
            @error('firstname')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex-1">
            <label for="lastname" class="block text-sm font-medium">Last Name</label>
            <input type="text" name="lastname" id="last_name" value="{{ old('lastname', $user->lastname ?? '') }}"
              class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
            <p class="text-xs text-gray-500 mt-1">Enter your family name. Example: Doe.</p>
            @error('lastname')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div>
          <label for="username" class="block text-sm font-medium">Username</label>
          <input type="text" name="username" id="username" value="{{ old('username', $user->username ?? '') }}"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
          <p class="text-xs text-gray-500 mt-1">Choose a unique username. This is how others will identify you.</p>
          @error('username')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="campus" class="block text-sm font-medium">Campus</label>
          <input type="text" name="campus" id="campus" value="{{ old('campus', $user->campus ?? '') }}"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
          <p class="text-xs text-gray-500 mt-1">Enter the name of your campus or college.</p>
          @error('campus')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="image" class="block text-sm font-medium">Profile Photo</label>
          <input type="file" name="image" id="profile_photo"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none">
          <p class="text-xs text-gray-500 mt-1">Upload a clear profile picture. JPG or PNG formats only.</p>
          @error('profile_photo')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="buttons text-center">
          <input type="submit" value="update details" id="detailsBtn" class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
            
          </input>
        </div>
      </form>
    </div>

    <!-- Update Security Details Form -->
    <div class="form-container bg-white p-8 rounded-2xl shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Update Security Details</h2>
      <form 
        hx-post="{{ route('updateSecurityDetails',['user' => $user->id ]) }}" 
        hx-target="#notification" 
        hx-swap="outerHTML"
        method="POST"
        class="space-y-6"
      >
        @csrf

        <!-- Current Password for verification -->
        <div>
          <label for="current_password" class="block text-sm font-medium">Current Password</label>
          <input type="password" name="current_password" id="current_password"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
          <p class="text-xs text-gray-500 mt-1">Enter your current password to verify changes.</p>
          @error('current_password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block text-sm font-medium">Email</label>
          <input type="email" name="email" id="email" value="{{ old('email', $user->email ?? '') }}"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
          <p class="text-xs text-gray-500 mt-1">Enter a valid email address. Used for communication and password reset.</p>
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="phone_number" class="block text-sm font-medium">Phone Number</label>
          <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number ?? '') }}"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none" required>
          <p class="text-xs text-gray-500 mt-1">Enter your active phone number. Example: +254700000000.</p>
          @error('phone_number')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="password" class="block text-sm font-medium">New Password</label>
          <input type="password" name="new_password" id="password"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none">
          <p class="text-xs text-gray-500 mt-1">Choose a strong password (at least 8 characters).</p>
          @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="password_confirmation" class="block text-sm font-medium">Confirm New Password</label>
          <input type="password" name="new_password_confirmation" id="password_confirmation"
            class="w-full mt-1 p-2 border rounded-md focus:ring focus:outline-none">
          <p class="text-xs text-gray-500 mt-1">Re-enter your new password to confirm.</p>
        </div>

        <div class="buttons text-center">
          <input type="submit" value="Update security details" class="bg-blue-600 text-white px-6 py-2 rounded-xl shadow hover:bg-blue-700 transition">
          </input>
        </div>
      </form>
    </div>

  </div>
</main>
