<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">

    <!-- using the Sass asset for compiling the css -->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

    <!-- using the framework Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Mon blog !</title>
  </head>
  	<body>

  		@include('layouts/partials/nav')

  		  <main role="main" class="main">
			   <div class="container">
	   	 	   @yield('content')
	   	 	 </div>
	   	 </main>
		

		@include('layouts/partials/footer')

	<!-- using the Sass asset for compiling the JavaScript -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>    	
   	</body>
</html>