<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- style -->
        <style>
          *{
              margin: 0;
              box-sizing: border-box;
              padding: 0;
          }
          body{
              font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
          }
          .title{
              max-width: 18rem;
              align-items: center;
              font-size: 20px;
              width: 320px;
          }
          .text{
              font-size: 80px;
              color: #fff;
              letter-spacing: 5px;
              box-shadow: 0px 0px 15px 0px rgb(0,0,0,0.5);
          }
          .content{
              align-items: center;
              margin-top: 27vh;
              margin-left: 580.79px;
          }
        </style>

    </head>
    <body class="bg-primary">
        <div class="flex-center position-ref full-height">


            <div class="content">

                <div class="card mb-10 title p-4 bg-primary">
                    <div class="card-header font-weight-bold text">VICTOR</div>
                    <div class="card-body text-info">

                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="badge badge-light p-2">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="badge badge-secondary p-2">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    </div>
                  </div>

            </div>
        </div>
    </body>
</html>
