@extends('layouts/master')

@section('content')

{{ $posts->post_content }}
<br>
<br>
{{ $posts->post_date }}

@endsection