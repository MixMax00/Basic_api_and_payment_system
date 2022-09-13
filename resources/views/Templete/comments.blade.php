@foreach($comments as $comment)
	<div class="card m-2 p-2">
		<p>{{ $comment->comment }}</p>
		<span class="bedge bedge-info">{{ $comment->created_at->format('d-M-y') }}</span>
	</div>

@endforeach


@if(!count($comments))
	<p>No comments found</p>
@endif