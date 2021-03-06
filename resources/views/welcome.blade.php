<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/welcome.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
<div></div>
            <div class="card" style="width: 200px; height: 200px">
                <img class="card-img-top" src="img/bmw_PNG99531.png" alt="Card image cap">
                <div class="card-body">
                  <h3>bmw</h3>
                  <a href="#" class="btn btn-outline-dark">more details</a>
                </div>
              </div>
              <div class="card" style="width: 200px; height: 200px">
                <img class="card-img-top" src="img/unnamed.png" alt="Card image cap">
                <div class="card-body">
                  <h3>benz</h3>
                  <a href="#" class="btn btn-outline-dark">more details</a>
                </div>
              </div>
              <div class="card" style="width: 200px; height: 200px">
                <img class="card-img-top" src="img/41cZ7NkRWBL._SX425_.jpg" alt="Card image cap">
                <div class="card-body">
                  <h3>tesla</h3>
                  <a href="#" class="btn btn-outline-dark">more details</a>
                </div>
              </div>
              <div class="card" style="width: 200px; height: 200px">
                <img class="card-img-top" src="img/AL090142_full.jpg" alt="Card image cap">
                <div class="card-body">
                  <h3>audi</h3>
                  <a href="#" class="btn btn-outline-dark">more details</a>
                </div>
                <a href="/form" class="btn btn-info">buy</a>
            </div>
            
            </div>
            
            <div>
                
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

..................................................................................................................................