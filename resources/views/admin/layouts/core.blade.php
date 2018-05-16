<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>TraveLadub</title>
      <link href="/assets2/css/bootstrap.min.css" rel="stylesheet">
      <link href="/assets2/css/font-awesome.min.css" rel="stylesheet">
      <link href="/assets2/css/admin.css" rel="stylesheet">
      <link href="/assets2/css/adduser.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   </head>
   <body>
      @yield('header')
      @yield('sidebar')
      @yield('content')
      @yield('footer')
      <script src="/assets2/js/jquery-1.11.1.min.js"></script>
      <script src="/assets2/js/bootstrap.min.js"></script>    
      <script src="/assets2/js/bootstrap-datepicker.js"></script>
      <script src="/assets2/js/custom.js"></script>  
   </body>
</html>