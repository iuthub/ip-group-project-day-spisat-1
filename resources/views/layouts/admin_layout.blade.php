<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/adminPage.css') }}">
        <title>The Chemodan|Admin</title>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('/img/travelling.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

      @include('partials.admin_navbar')

      @include('partials.error')

      @include('partials.infobox')
      <div class="container-fluid" >
        <div class="row">
          @include('partials.admin_left_menu')

          @yield('content')

        </div>
      </div>
    </body>
</html> 