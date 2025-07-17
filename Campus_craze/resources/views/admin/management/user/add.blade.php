<div id="main-content" class="flex-3 mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
    {{-- Success Notification --}}
    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Notification --}}
    @if (session('error'))
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <h2 class="text-2xl font-medium mb-6">Create New User</h2>
    <form 
        hx-post="{{ route('user.store') }}"
        method="POST"
        autocomplete="off"
    >
        @csrf

        <!-- First & Last Name Side by Side -->
        <div class="mb-4 flex flex-col sm:flex-row gap-4">
            <div class="w-full">
                <label for="firstname" class="block text-sm mb-1">First Name</label>
                <input type="text" name="firstname" id="firstname" 
                    class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition" 
                    value="{{ old('firstname') }}">
                @error('firstname')
                    <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full">
                <label for="lastname" class="block text-sm mb-1">Last Name</label>
                <input type="text" name="lastname" id="lastname" 
                    class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition" 
                    value="{{ old('lastname') }}">
                @error('lastname')
                    <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Username -->
        <div class="mb-4">
            <label for="username" class="block text-sm mb-1">Username</label>
            <input type="text" name="username" id="username" 
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition"
                value="{{ old('username') }}">
            @error('username')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Bio -->
        <div class="mb-4">
            <label for="bio" class="block text-sm mb-1">Bio</label>
            <textarea name="bio" id="bio" 
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition"
            >{{ old('bio') }}</textarea>
            @error('bio')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campus -->
        <div class="mb-4">
            <label for="campus" class="block text-sm mb-1">Campus</label>
            <input type="text" name="campus" id="campus"
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition" 
                value="{{ old('campus') }}">
            @error('campus')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Is Admin -->
        <div class="mb-4">
            <label for="is_admin" class="block text-sm mb-1">Is Admin?</label>
            <select name="is_admin" id="is_admin"
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition"
            >
                <option value="false" {{ old('is_admin', 'false') == 'false' ? 'selected' : '' }}>No</option>
                <option value="true" {{ old('is_admin') == 'true' ? 'selected' : '' }}>Yes</option>
            </select>
            @error('is_admin')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <label for="phone_number" class="block text-sm mb-1">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number"
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition" 
                value="{{ old('phone_number') }}">
            @error('phone_number')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm mb-1">Email</label>
            <input type="email" name="email" id="email"
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition" 
                value="{{ old('email') }}">
            @error('email')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm mb-1">Password</label>
            <input type="password" name="password" id="password"
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition">
            @error('password')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>
        
        <!-- Confirm Password -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="w-full border border-gray-400 bg-gray-50 rounded px-3 py-2 focus:outline-none focus:border-blue-400 transition">
            @error('password_confirmation')
                <span class="text-red-600 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Create User</button>
    </form>
</div>