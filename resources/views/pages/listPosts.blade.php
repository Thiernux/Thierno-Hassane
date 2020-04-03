@extends('layouts/menu')

@section('content')
	<ul>
	@foreach ( $posts as $post )

	  <li><a href="{{ route('root_path') }}">{{ $post->post_title }}</a></li>

	@endforeach
	</ul>
@endsection
