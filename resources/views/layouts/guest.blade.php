<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <title>3FG ALUMINUIM</title>
    <link rel="shortcut icon" href="images/favicon.ico">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page" style="background-image: url(images/all.jpg) ; background-repeat: no-repeat;
background-attachment: fixed;  
background-size: cover;">

<div class="login-box" >
    <div class="login-logo" >
       <img src="{{ asset('images/Logo.png') }}" alt="3FG Aluminuim"/>
    </div>
    <!-- /.login-logo -->
    <div class="card" >
        @yield('content')
    </div>
    
</div>
<!-- /.login-box -->

@vite('resources/js/app.js')
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}" defer></script>
</body>
</html>
