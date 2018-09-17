<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A social media timeline for D.S.V. \"Nieuwe Delft\" (D.S.S. De Bolk)">
    <meta name="author" content="Matthijs Amesz">

    <title>FaceBolk</title>

    <link rel=icon href="/images/favicon.png" sizes="196x196" type="image/png">
     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/facebolk.css" rel="stylesheet">

  </head>

  <body>

    @include('layout.header')

    <!-- Page Content -->
    <div class="container">

        @yield('content')

    </div>
    <!-- /.container -->

    @include('layout.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
