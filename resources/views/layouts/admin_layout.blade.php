<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel</title>
    </head>
    <body>
      @include('partials.admin_navbar')
      
      @include('partials.admin_left_menu')

      @yield('content')
    </body>
</html>