
<!DOCTYPE html>
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Simple Blog</title>
  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">

  <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'> 
    <!-- optional CDN for Foundation Icons ^^ -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body>

  <!-- Nav Bar -->

    <div class="row">
      <div class="large-12 columns">
        <div class="nav-bar right">
          <ul class="button-group">
             <li><a href="{{ route('root_path') }}" class="button">Blog</a></li>
             <li><a href="{{ route('root_path') }}" class="button">Home</a></li>
             <li><a href="{{ route('listPosts_path') }}" class="button">Publications</a></li>
             <li><a href="{{ route('contact_path') }}" class="button">Contactez-mois</a></li>
          </ul>
        </div>
        <h1>Thiernux <small>This is my blog.</small></h1>
        <hr />
      </div>
    </div>

    <!-- End Nav -->


    <!-- Main Page Content and Sidebar -->

    <div class="row">

      <!-- Main Blog Content -->
      <div class="large-12 columns" role="content">

        @yield('content')

      </div>

      <!-- End Main Content -->


      <!-- Sidebar -->

      <!-- End Sidebar -->
    </div>

    <!-- End Main Content and Sidebar -->


    <!-- Footer -->

    <footer class="row">
      <div class="large-12 columns">
        <hr />
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright no one at all. Go to town.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="{{ route('root_path') }}">Home</a></li>
              <li><a href="{{ route('listPosts_path') }}">Publications</a></li>
              <li><a href="{{ route('contact_path') }}">Contactez-moi</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>




