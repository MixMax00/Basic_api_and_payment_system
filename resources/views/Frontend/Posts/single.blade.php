@extends('Frontend.master')




@section('content')

	<div class="container">
		<div class="row mt-4">
			<div class="col-8 offset-2">
				<div class="card" id="post-details" data-post-id="{{ $single_post->id}}">
					<div class="card-body">
						<h5>{{ $single_post->title}}</h5>
						<p>{{ $single_post->description}}</p>
						<p>Created At: {{ $single_post->created_at->format('d-M-y')}}</p>
					</div>
					<div class="comment m-3">
						<h3 class="ml-2">Comments</h3>
						<div id="post-comment">
							Lodding Comments......
						</div>
					</div>

					<div class="new-comment m-2">
						<h4>New Comment</h4>
						 <form method="POST" id="comment-submit">
						 	@csrf
						 	<textarea name="new_comment" id="new_comment" class="form-control mb-2"></textarea>
						 	<input type="submit" value="Save" class="btn btn-primary" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection