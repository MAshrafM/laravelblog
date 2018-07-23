<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="https://bootswatch.com/4/united/bootstrap.min.css" rel="stylesheet" type="text/css"> 
        <style>
            html, body{
              background-color: #fff;
              color: #636b6f;
              font-family: 'Raleway', sans-serif;
              height: 100vh;
              margin: 0;
              width: 100vw;
              overflow-x: hidden;
            }
            main {
                margin-top: 60px;
                color: #636b6f;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: 800;
            }
        </style>
    </head>
    <body>
      @include('layout.navbar')
      <main>
        @yield('content')
      </main>
      @include('layout.footer')
    </body>
</html>
