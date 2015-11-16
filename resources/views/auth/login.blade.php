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

    <link rel="stylesheet" href="/css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="/js/script.js"></script>

</head><!--/head-->

<body>
<header id="header" role="">
    <div id='cssmenu' style="margin-left: 5%;width:90%; height:80px">
        <ul style="margin-top: 1%;">
            <li class='active'><a href='/auth/login'><b><i class="icon-lock"></i>&nbsp;Staff Login</b></a></li>
            <li><a href=''><b><i class="icon-lock"></i>&nbsp;Admin Login</b></a></li>
            {{--<li><a href='/rooms'><b>Rooms</b></a></li>--}}
            {{--<li><a href='/gallery'><b>Gallery</b></a></li>--}}
            {{--<li class='active'><a href='/contact'><b>Contact</b></a></li>--}}
        </ul>
    </div>
</header><!--/#header-->

<section id="" class="" style="height:55px">

</section><!--/#main-slider-->

<section id="services" STYLE="">
    <div class="container">
        <div class="box first" STYLE="margin-top:1%">
            <div class="center gap">
                <h3><b>Staff Login.</b></h3>
            </div>
            @include('errors.errors')
            <div style="border:1px solid #c0c0c0; margin-left: 15%; width: 70%; border-radius: 10px 10px; height:200px">
                <div class="row" style="margin-top: 5%">
                    <form class="" method="post" action="/auth/login" role="form" style="margin-top: -2.5%;margin-left: 5%">
                        {!! csrf_field() !!}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <div class="col-sm-6" style="height: 70px;" id="" >
                            <div class="" style="margin-left: 5%">
                                <label class="" for="">Email:</label>
                                <div class="row" style="">
                                    <div class="form-group col-sm-9">
                                        <input type="email" style="" name="email" value="{{ old('email') }}" class="form-control" required="required" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="height: 80px;" id="" >
                            <div class="" style="margin-left: -3%">
                                <label class="" for="">Password:</label>
                                <div class="row" style="">
                                    <div class="form-group col-sm-9">
                                        <input type="password" style="" name="password" id="password" class="form-control" required="required" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"style="margin-left: 18%;">
                            <input style=" margin-top: 0%" type="checkbox" name="remember"> Remember Me
                        </div>
                        <div class="form-group" style="margin-left: 18%">
                            <button id="staffLogin" style="width: 70%" type="submit" class="btn btn-primary "><b>Sign In</b></button>
                        </div>
                    </form>
                </div>
            </div><br/><br/><br/><br/><br/><br/><br/>

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