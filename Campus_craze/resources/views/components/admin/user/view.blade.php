<!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
<div id="main" class="p-6 bg-gray-50 min-h-screen rounded-lg shadow-md flex flex-col gap-8 flex-3">

    <!-- User Profile Header -->
    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{$user->username}}'s Profile</h3>

    <!-- Profile Info -->
    <div class="flex flex-col md:flex-row gap-6 items-start bg-white rounded-lg shadow p-6">
        <figure class="flex-shrink-0 w-32 h-32 rounded-full overflow-hidden border-4 border-blue-100 bg-gray-100 flex items-center justify-center">
            <img src="" alt="profile picture" class="object-cover w-full h-full">
        </figure>
        <article class="flex-1">
            <section>
                <h4 class="text-lg font-semibold text-gray-700 mb-1">{{ $user->username}}'s Bio</h4>
                <p class="text-gray-600">Some text</p>
            </section>
        </article>
    </div>

    <!-- User's Posts -->
    <div class="bg-white rounded-lg shadow p-6">
        <h4 class="text-lg font-semibold text-gray-700 mb-4">{{ $user->username}}'s Posts</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Post Title</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Post Likes</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    
					@forelse($user->posts as $post)
						<tr>
                        	<td class="px-6 py-4 text-gray-800">{{$post->title}}</td>
                        	<td class="px-6 py-4 text-gray-800">{{$post->likes}}</td>
                        	<td class="px-6 py-4">
                            	<ul class="flex gap-2 flex-wrap">
                                	<li>
                                    	<button class="text-red-600 hover:underline hover:text-red-800 transition">Delete Post</button>
                                	</li>
                                	<li>
                                   	 <button class="text-yellow-600 hover:underline hover:text-yellow-800 transition">Flag Post</button>
                                	</li>
                                	<li>
                                    	<button class="text-blue-600 hover:underline hover:text-blue-800 transition">View Post</button>
                                	</li>
                            	</ul>
                        	</td>
                    	</tr>
					@empty
						<tr>
                        	<td class="px-6 py-4 text-red-900" colspan="3">{{$user->username}} has no posts</td>
                    	</tr>
					@endforelse

                </tbody>
            </table>
        </div>
    </div>

    <!-- User's Comments -->
    <div class="bg-white rounded-lg shadow p-6">
        <h4 class="text-lg font-semibold text-gray-700 mb-4">User's Comments</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Comment</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-gray-800">Abraham Lincoln</td>
                        <td class="px-6 py-4">
                            <button class="text-red-600 hover:underline hover:text-red-800 transition">Delete Comment</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>