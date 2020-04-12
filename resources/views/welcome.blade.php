<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Site Name -->
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/sketchy/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 80;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class="flex-center position-ref full-height navbar">
            @if (Route::has('login'))
                <div class="top-right links navbar">
                    @auth
                        <a href="{{ url('/home') }}">Pocetna</a>
                    @else
                    
                        <a href="{{ route('login') }}">Loguj se</a>
                        <a href="{{ route('register') }}">Registruj novog korisnika</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    EVIDENCIJA POSILJKI
                </div>

                <h3>
                    By Almir Junuzovic
                </h3>

                <h4>
                   Verzija: beta 1.0
                </h4>
                <a href="{{ route('login') }}" class="btn btn-block btn-secondary">Loguj se</a>

            </div>
        </div>
    </div>
    </body>
</html>
