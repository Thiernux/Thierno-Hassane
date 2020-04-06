@extends('layouts/master')

@section('content')
	<ul>
	@foreach ( $posts as $post )

	  <li>
	  	<a href="{{ route('post_path', $post) }}"> {{ $post->post_title }} </a>

	  	<br>

	  	<p> Posted on {{ $post->post_date }} </p>
	  </li>

	@endforeach
	</ul>
@endsection
