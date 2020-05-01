<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel</title>
    </head>
    <body>
      @include('partials.navbar')
      
      @include('partials.left_menu')

      @yield('content')
    </body>
</html>