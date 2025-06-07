
    <!-- Be present above all else. - Naval Ravikant -->

 <div class="bg-gray-100 p-4 rounded-lg">
  	<p class="text-gray-800">{{ $comment->content }}</p>
	<p class="text-sm text-gray-500">Posted by {{ $comment->author->username }}</p>
	<span class="text-sm text-gray-500">On {{ \Carbon\Carbon::parse($comment->created_at)->toDayDateTimeString() }}</span>
 </div>

