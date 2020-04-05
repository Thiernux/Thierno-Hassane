@extends('layouts/master')


@section('content')

<div class="card mb-1">
	<div class="card-body">
		<h2 class="card-text">WELCOME</h2>
		<p class="card-text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>
	<div class="card-body">
		<h2>Nouvelles Publications</h2>
		<ul>
		@foreach( $posts as $posts )

		  <li>
		  	<h3 class="card-title">
		  			{{ $posts->post_title }}
		  	</h3>
		  	<p class="card-text">
		  		{{ substr ($posts->post_content, 0, 80) }}...
		  		<a href="{{ route('post_path', $posts) }}" class="btn btn-primary">
		  			Read more
		  		</a>
		  	</p>
		  	<div class="card-footer text-muted"> 
		  		Posted by <strong>{{ $posts->author->name }}</strong>, on  {{ $posts->post_date }} 
		  	</div>
		  </li>
		  <br>
		@endforeach
		</ul>
	</div>
</div>

@endsection