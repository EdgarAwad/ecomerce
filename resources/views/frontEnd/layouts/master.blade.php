<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="{{ asset('img/all.png') }}">
  <title>@yield('title','Master Page')</title>
  <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
  <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="{{asset('frontEnd/css/app.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link href="{{asset('frontEnd/css/hover.css')}}" rel="stylesheet" media="all">
  <!--[if lt IE 9]>
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <![endif]-->
  <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->


</head>
<!--/head-->

<body>
  @include('frontEnd.layouts.header')
  @section('slider')
  @include('frontEnd.layouts.slider')
  @show
  @yield('content')
  @include('frontEnd.layouts.footer')
  <script src="{{asset('frontEnd/js/jquery.js')}}"></script>
  <script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('frontEnd/js/price-range.js')}}"></script>
  <script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('frontEnd/js/main.js')}}"></script>
  <script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>
  <script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
      var $this = $(this);

      e.preventDefault();

      // Use EasyZoom's `swap` method
      api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
      var $this = $(this);

      if ($this.data("active") === true) {
        $this.text("Switch on").data("active", false);
        api2.teardown();
      } else {
        $this.text("Switch off").data("active", true);
        api2._init();
      }
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>