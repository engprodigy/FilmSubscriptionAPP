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

    <title>Film</title>

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

      
      <p> &nbsp; </p>
        <div class="container">
             <!-- Content Row -->
    
        <div class="row">
           <h1>ADD NEW FILM</h1>

                 <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
                </ul>

            {!! Form::model($film, array('route' => 'film_save', 'class' => 'form')) !!}

           <div class="form-group">
            {!! Form::label('Description') !!}
             {!! Form::text('description', null, 
                  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Description')) !!}
                    </div>

                  <div class="form-group">
                 {!! Form::label('Release Date') !!}
                    {!! Form::text('releasedate', null, 
                     array('required', 
                       'class'=>'form-control', 
                     'placeholder'=>'Your e-mail address')) !!}
                    </div>


                   <div class="form-group">
                       {!! Form::submit('Contact Us!', 
                       array('class'=>'btn btn-primary')) !!}
                      </div>
                    {!! Form::close() !!} 
       </div>
    
    </div>
            
            


    </body>
</html>
