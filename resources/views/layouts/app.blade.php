<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chrowork</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
   <link rel="stylesheet" href="{{ asset('mobirise/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
      
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body>
<div id="app">
        @guest
             @include('layouts.navigation')
        @else
            @include('layouts.navigation')
            <div class="row">
                <div class="col-md-2">
                    @include('layouts.sidebar')
                </div>
       @endguest
                <div class="col-md-10">
                 @yield('content')
                </div>
            </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>