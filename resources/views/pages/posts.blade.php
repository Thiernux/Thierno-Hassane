@extends('layouts/menu')

@section('content')

{{ $post->post_content }}
<br>
<br>
{{ $post->post_date }}

@endsection