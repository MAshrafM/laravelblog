<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src={{asset('js/unisharp/laravel-ckeditor/ckeditor.js')}} type="text/javascript"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://bootswatch.com/4/united/bootstrap.min.css" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    @include('layouts.navbar')
      @include('layouts.messages')
      <main class="py-3">
        @yield('content')
      </main>
      @include('layouts.footer')
      
      <script>
        CKEDITOR.replace( 'article-ckeditor' );
      </script>
</body>
</html>
