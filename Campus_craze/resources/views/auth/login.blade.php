<x-auth.layout>
	<x-slot:title>
		Login
	</x-slot>


	<main class="flex-2 flex flex-col justify-center">

		
			<form
  class="flex flex-col mx-auto p-6  rounded-lg shadow bg-white"
  method="POST"
  action="{{ route('authenticate') }}"
>
  @csrf

  <h3 class="text-center text-2xl font-semibold">Login</h3>

  <label for="email" class="flex flex-col text-sm font-medium text-gray-700">
    Email
    <input
      class="mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
      type="text"
      name="email"
      id="email"
      required
    />
  </label>

  <label for="password" class="flex flex-col text-sm font-medium text-gray-700">
    Password
    <input
      class="mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
      type="password"
      name="password"
      id="password"
      required
    />
  </label>

  <button
    type="submit"
    class="mt-4 bg-blue-500 text-white font-semibold py-2 rounded hover:bg-blue-600 transition duration-200"
  >
    Login
  </button>
</form>
	

	</main>

</x-layout>
