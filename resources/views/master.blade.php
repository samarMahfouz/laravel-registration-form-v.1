<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>registeration system </title>

        <!-- Fonts -->
        <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aref+Ruqaa&display=swap">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
      @yield('content')
<!-- Start footer -->
<footer >
  <div class="container">
    <section >

    </section>
  </div>
</footer>
<!-- End footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script  src="{{URL::asset('js/mixitup.min.js')}}"></script>
<script  src="{{URL::asset('js/jquery.js')}}"></script>
<script  src="{{URL::asset('js/pwstrength-bootstrap.min.js')}}"></script>
<script  src="{{URL::asset('js/custom.js')}}"></script>
</html>

    </body>
</html>
