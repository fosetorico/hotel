<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Newland Hotels and Suites.</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
<header id="header" role="banner">
    <div class="container">
        <div id="navbar" class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="">
                    <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                    <!--li><a href="">Services</a></li>
                    <li><a href="">Rooms</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Contact</a></li-->
                </ul>
            </div>
        </div>
    </div>
</header><!--/#header-->

<section id="" class="" style="height:55px">

</section><!--/#main-slider-->

<section id="services" STYLE="">
    <div class="container">
        <div class="box first" STYLE="margin-top:1%">

            {{--<form method="POST" action="/auth/login">--}}
                {{--{!! csrf_field() !!}--}}

                {{--<div>--}}
                    {{--Email--}}
                    {{--<input type="email" name="email" value="{{ old('email') }}">--}}
                {{--</div>--}}

                {{--<div>--}}
                    {{--Password--}}
                    {{--<input type="password" name="password" id="password">--}}
                {{--</div>--}}

                {{--<div>--}}
                {{--</div>--}}

                {{--<div>--}}
                    {{--<button type="submit">Login</button>--}}
                {{--</div>--}}
            {{--</form>--}}

            @include('errors.errors')
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div class="col-md-6">
                    Email
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    Password
                    <input type="password" name="password">
                </div>
                <div class="col-md-6">
                    Surename
                    <input type="text" name="surname" value="{{ old('surname') }}">
                </div>
                <div class="col-md-6">
                    Last Name
                    <input type="text" name="lastname" value="{{ old('lastname') }}">
                </div>
                <div class="col-md-6">
                    Mobile
                    <input type="text" name="mobile" value="{{ old('mobile') }}">
                </div>

                <div class="col-md-6">
                    Address
                    <input type="text" name="address" value="{{ old('address') }}">
                </div>
                <div class="col-md-6">
                    Confirm Password
                    <input type="password" name="password_confirmation">
                </div>

                <div>
                    <button type="submit">Register</button>
                </div>
            </form>

        </div>
    </div><!--/.container-->
</section><!--/#services-->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <b>&copy;</b>
                <?php
                    $date = date('Y-M-d');
                    $subt = substr($date, 0, 4);
                ?> {{$subt}}&nbsp;
                <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><b>Newlnd Hotels and Suites</b></a>. All Rights Reserved.
            </div>
            <!--div class="col-sm-6">
                <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
            </div-->
        </div>
    </div>
</footer><!--/#footer-->

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.isotope.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>
{{--<script src="js/custom/default.js"></script>--}}
</body>
</html>