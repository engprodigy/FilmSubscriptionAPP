<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="icon" href="/favicon.png" />

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{asset('magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/brand.css')}}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- <div class="se-pre-con"></div> -->
    
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js')}}"></script>
    <script src="{{asset('scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom Js File -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>