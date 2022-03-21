
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>@yield('title')</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
  
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    @include('partials.header')
    @yield('content')
    
    @include('partials.footer')
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>
</body>