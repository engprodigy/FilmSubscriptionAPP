<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Posh Deli</title>

    <!-- Bootstrap core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <!--<link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="theme.css" rel="stylesheet" type="text/css">-->
    <link href="css/poshtheme.css" rel="stylesheet" type="text/css">
      <!--<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='//fonts.googleapis.com/css?family=Cambay' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  </head>

  <!--<body role="document">-->
  <body>
  <!--wrapper start-->
     <div class="wrapper" id="wrapper">
     <!--header section-->
        <header>
    <!-- Fixed navbar -->
          <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
              <div class="navbar-header">
                 <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                 </button>-->
          <a class="navbar-brand" href="#">Posh Deli</a>
              </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li > <a href="#banner">Small Chops</a></li>
            <li><a href="#features">Rice in all flavors</a></li>
            <li class="dropdown"  id="dropdowna"><a href="#LocalDelicacies" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Local Delicacies <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Semo</a></li>
                <li><a href="#">Eba</a></li>
                <li><a href="#">Pounded Yam</a></li>
                <!--<li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>-->
              </ul></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
              </ul>
            </div><!--/.nav-collapse -->
         </div>
        </nav>
      </header>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
       </div>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                
            </div>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p>Im i good to go </p>
            @foreach($data as $row)
                <tr>
               <td>{{$row->product_name}}</td>
                  <td>{{$row->product_description}}</td>
                <td>
            <a href="#">Complete</a> | <a href="#">Edit</a> | <a href="#">Delete</a>
        </td>
    </tr>
@endforeach


    </body>
</html>
