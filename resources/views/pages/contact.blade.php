@extends('layouts/master', ['title' => 'Contact'])

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-10 mx-auto">
			<h2>Contactez-moi</h2>	
			<form action="{{ route('contact_path') }}" method="POST">
				<div class="form-group">
					<label for="name" class="control-label">Name</label>
					<input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" required="required">
					<div>{{ $errors->first('name') }}</div>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control" required="required">
					<div>{{ $errors->first('email') }}</div>
				</div>

				<div class="form-group">
					<label for="msg">Message</label>
					<textarea type="text" name="msg" id="msg" cols="10" rows="8" class="form-control" required="required">{!! old('msg') !!}</textarea>
					<div>{{ $errors->first('msg') }}</div>	
				</div>
				@csrf

				<div class="form-group">
				<button class="btn btn-primary btn-block" type="submit">Send message</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection