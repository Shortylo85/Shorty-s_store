
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Orbitron:400,700|Reem+Kufi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Reem+Kufi" rel="stylesheet">


    <!-- Bootstrap core CSS -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- My CSS-->

    <link href="{{asset('css/style.css')}}" rel="stylesheet">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    {{--<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->--}}
    {{--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">--}}

    {{--<!-- Custom styles for this template -->--}}
    {{--<link href="navbar.css" rel="stylesheet">--}}

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="{{URL::to('css/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    {{--<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->--}}
    {{--<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->--}}
    {{--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    @include('includes.header')


    @yield('content')

    <div class="row">
        <br>
        <div class="navbar">
            <div class="container">
                <p style="color: #005b9a; text-align: center;margin-top: 15px;">Created by Shorty <i class="fa fa-registered" aria-hidden="true"></i>
                    |<a href="https://www.facebook.com/shortylo85">Facebook<i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

    @yield('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{URL::to('js/checkout.js')}}"></script>

{{--<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->--}}
{{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}
</body>

</html>
