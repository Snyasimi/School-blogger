<x-auth.layout>
	<x-slot:title>
		Sign Up
	</x-slot>


	<main class="flex-2 flex flex-col justify-center">

		<div class="w-full max-w-lg m-auto px-8 pt-6 pb-8 mb-4">


            <form action="{{ route('register') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Username
                    <input type="text" name="username" value="{{ old('username') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('username')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Firstname
                    <input type="text" name="firstname" value="{{ old('firstname') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('firstname')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Lastname
                    <input type="text" name="lastname" value="{{ old('lastname') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('lastname')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Campus
                    <input type="text" name="campus" value="{{ old('campus') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('campus')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Phone Number
                    <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('phone_number')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Email
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Password
                    <input type="password" name="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('password')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Confirm Password
                    <input type="password" name="confirm_password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('confirm_password')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </label><br>
            
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Register
                </button>
            </form>



        </div>
        
        
        
	

	</main>

</x-layout>
