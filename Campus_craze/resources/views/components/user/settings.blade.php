<main class="flex-4 min-h-screen bg-blue-50 " id="main">

	<h2 class="shadow-md bg-white p-4 rounded-lg m-3 text-xlg font-bold">Update User Details</h2>
  <form action="/submit" method="POST" class="m-3  mx-3 bg-white p-6 rounded-lg shadow-md space-y-6">
    
    <div>
      <label for="username" class="block text-black font-bold mb-1">Username</label>
      <input type="text" name="username" id="username" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
      <label for="fname" class="block text-black font-bold mb-1">First Name</label>
      <input type="text" name="fname" id="fname" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
      <label for="lname" class="block text-black font-bold mb-1">Last Name</label>
      <input type="text" name="lname" id="lname" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
      <label for="phone" class="block text-black font-bold mb-1">Phone Number</label>
      <input type="tel" name="phone" id="phone" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
      <label for="email" class="block text-black font-bold mb-1">Email</label>
      <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
      <label for="campus" class="block text-black font-bold mb-1">Campus</label>
      <input type="text" name="campus" id="campus" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
      <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
        Submit
      </button>
    </div>

  </form>
</main>

