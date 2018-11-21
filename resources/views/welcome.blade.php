<!doctype html>
<html lang="{{ app()->getLocale() }}">
             <head>
        <title>BIENVENIDOS A YACUIBA</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="css/main.css" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
    </head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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

        
        </style>


    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

      
            <div id="wrapper" class="fade-in">

                <!-- Intro -->
                    <div id="intro">
                        <h1>BIENVENIDOS A <br />
                        YACUIBA</h1>
                        <p>Una ciudad linda y con gente alegre te espera</p><br/> Por que Yacuiba es para todos...
                        </p>
                    </div>


            </div>
        </div>
<!-- Scripts -->
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.scrollex.min.js"></script>
            <script src="js/jquery.scrolly.min.js"></script>
            <script src="js/skel.min.js"></script>
            <script src="js/util.js"></script>
            <script src="js/main.js"></script>


    </body>
</html>
