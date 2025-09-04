<!-- When there is no desire, all things are at peace. - Laozi -->
<nav class="flex-1 flex flex-col gap-6 w-64 p-6 bg-white rounded-lg shadow-md min-h-dvh">
    <!-- Sidebar Title -->
    <div class="mb-4">
        <h1 class="text-xl font-semibold text-blue-700 tracking-widest text-center">Campus Craze</h1>
    </div>

    <div>
        <ul class="space-y-1">
            <li>
                <a href="#"
                   hx-get="{{ route('admin.index') }}"
                   hx-trigger="click,delay:500ms"
                   hx-target="#dom"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 font-medium transition"
                >Home</a>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-xs font-semibold text-gray-500 uppercase mb-2 tracking-wider">User Management</h2>
        <ul class="space-y-1">
            <li>
                <a href="#"
                   hx-get="{{ route('admin.createUser')}}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Add a user</a>
            </li>
            <li>
                <a href="#"
                   hx-get="{{ route('admin.searchUser')}}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Search users</a>
            </li>
            
          

			<li>
                <a href="#"
                   hx-get="{{ route('admin.bannedUsers') }}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Banned users</a>
            </li>

            <li>
                <a href="#"
                   hx-get="{{ route('admin.bannedUsers') }}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Deleted users</a>
            </li>

        </ul>
    </div>

    <div>
        <h2 class="text-xs font-semibold text-gray-500 uppercase mb-2 tracking-wider">Blog Management</h2>
        <ul class="space-y-1">
            <li>
                <a href="#"
                   hx-get="{{ route('admin.searchPosts') }}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Search blogs</a>
            </li>
            
            <li>
                <a href="#"
                   hx-get="{{ route('admin.reportedPosts') }}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Reported blogs</a>
            </li>

            <li>
                <a href="#"
                   hx-get="{{ route('admin.deletedPosts') }}"
                   hx-trigger="click"
                   hx-target="#main-content"
                   hx-swap="outerHTML"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Deleted blogs</a>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-xs font-semibold text-gray-500 uppercase mb-2 tracking-wider">Settings</h2>
        <ul class="space-y-1">
            {{-- <li>
                <span class="block px-4 py-2 rounded-md text-gray-400 cursor-not-allowed">Update information</span>
            </li>
            <li>
                <span class="block px-4 py-2 rounded-md text-gray-400 cursor-not-allowed">Add users</span>
            </li> --}}


            <li>
                <a href="{{ route('generateReports') }}"
                   
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition"
                >Generate Reports</a>
            </li>
        </ul>
    </div>
</nav>