@extends('layouts/master')

@section('content')
<h1>Contactez-moi</h1>

<div class="container">
	<div class="row">
		<form action="{{ route('contact_path') }}" method="POST">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="{{ old('name') }}" class="form-control">
				<div>{{ $errors->first('name') }}</div>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" value="{{ old('email') }}" class="form-control">
				<div>{{ $errors->first('email') }}</div>
			</div>

			<div class="form-group">
				<label for="msg">Message</label>
				<textarea type="text" name="msg" id="msg" cols="30" rows="10" class="form-control">{!! old('msg') !!}</textarea>
				<div>{{ $errors->first('msg') }}</div>	
			</div>
			@csrf

			<div class="form-group">
			<button class="btn btn-primary btn-block" type="submit">Send message</button>
			</div>
		</form>
	</div>
</div>
@endsection