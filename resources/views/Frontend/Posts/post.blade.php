@extends('Frontend.master')



@section('content')
	<div class="container">
		<div class="row mt-4 mb-3">
			@foreach($posts as $post)
				<div class="col-4 mb-2">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">{{ $post->title }}</h5>
					    <p class="card-text">{{ Str::limit($post->description, '50', '....') }}</p>
					    <a href="#" class="nav-link">Author: {{ Str::limit($post->user->name, '8', '.') }}</a>
					     <a href="{{ route('post.single', ["id"=>$post->id])}}" class="btn btn-primary">Learn More</a>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection