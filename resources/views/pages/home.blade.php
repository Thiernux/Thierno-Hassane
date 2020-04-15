@extends('layouts/master')

@section('content')

		<h2 class="display-4">Hello, Welcome</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>	
	
		<h3 class="display-5">Nouvelles Publications</h3>
		<div class="row align-items-start">	
			<div>
				<ul class="col-lg-10">
					@foreach( $posts as $posts )
						<li>
						  	<h4>{{ $posts->post_title }}
						  		Posted by <strong>{{ $posts->author->name }}</strong>, on  {{ $posts->post_date }}
						  	</h4>
							<p>
								{{ substr ($posts->post_content, 0, 80) }}...
								<a class="btn btn-secondary" href="{{ route('post_path', $posts) }}" rol="button">
									Read more &raquo;
								</a>
							</p>
						</li>
						<br>
					@endforeach
				</ul> 
			</div>
		</div>
@endsection






				
	




			
			
						
					
							
					   
			
	