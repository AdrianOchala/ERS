
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ERS</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled Bootstrap JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
    <div>

    </div>
    <div class="wrapper content ">

        @include('menu')
        <div class="header">
            <img src="{{asset('img/logo.png')}}" alt="Logo" style="width: 70%; height: auto">
        </div>
        @yield('content')

        <div class="footer">
            <div class="row">
                <div id="footer1" class="col-lg-2">
                    <img src="{{asset("img/transparentIconFooter.png")}}" class="footerIcon"><br>
                    Speed. Passion. Love.


                </div>
                <div class="col-lg-2">
                    <dt>Socials</dt>
                    <div class="links">
                    <a href="#"><i class='fab fa-facebook-square'></i></a>
                    <a href="#"><i class='fab fa-youtube'></i></a>
                    <a href="#"><i class='fab fa-discord'></i></a>
                    <a href="#"><i class='fab fa-twitch'></i></a>
                    </div>
                </div>

                <div class="col-lg-4">

                </div>

                <div class="col-lg-4">

                </div>
            </div>


           <small>Copyright by &copy Adrian Ochała & Dawid Szmidt & Szymon Wójcik</small>
        </div>
    </div>
    </body>
</html>
