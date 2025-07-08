
    <!-- When there is no desire, all things are at peace. - Laozi -->

<nav class="flex flex-col">
	<div>
		<ul>
			<li>
				<a href=""
					hx-get="{{ route('admin.index') }}"
					hx-trigger="click,delay:500ms"
					hx-target="#main-content"
					hx-swap="outerHTML"
				>Home</a>
			</li>
	</div>

	<div>
		<h2>User Management</h2>
		<ul>
			<li>Search users</li>
			<li>Manage users</li>
		</ul>
	</div>

	<div>
		<h2>Blog management</h2>
		<ul>
			<li>Search blogs</li>
			<li>Manage blogs</li>
		</ul>
	</div>

	<div>
		<h2>Settings</h2>
		<ul>
			<li>Update information</li>
			<li>Add users</li>
		</ul>
	</div>

</nav>
