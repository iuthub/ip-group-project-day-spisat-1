<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel</title>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script src="./js/app.js" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="shortcut icon" href=".//img/travelling.png">
        <link rel="stylesheet" href="./css/style.css">
        <link href="./css/app.css" rel="stylesheet">
        <link href="./css/room.css" rel="stylesheet">
    </head>
    <body>
      @include('partials.navbar')     
      @include('hotel.dates_picker')     

      @yield('content')

      @include('partials.footer')
      @include('partials.modal_rooms')
    </body>
</html> 