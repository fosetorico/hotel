<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="SHORTCUT ICON" href="uploads/icon.jpg" TYPE="image/jpg"/>
    <title>Newland Hotels and Suites.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" href="/css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="/js/script.js"></script>

    <style rel="stylesheet">
        #main-slider{margin-top:80px;height: 720px}
        .carousel-inner{margin-top:-120px;height:750px}
        .slid_img{width:100%;height:400px;}
        .item{background-color: ghostwhite;height: 700px;}
    </style>

</head><!--/head-->

<body data-spy="scroll" data-target="" data-offset="0">
<header id="header" role="banner">
    <div style="background-color: white;width:100%">
        <img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 55px; width: 40%">
    </div>
    <div id='cssmenu' style="margin-left: 5%;width:90%;">
        <ul style="margin-top: 0%;">
            <li><a href='/'><b><i class="icon-home"></i>&nbsp;Home</b></a></li>
            <li><a href='/rooms'><b>Rooms</b></a></li>
            <li class='active'><a href='/gallery'><b>Gallery</b></a></li>
            <li><a href='/contact'><b>Contact</b></a></li>
            <li class="pull-right"><a href='/staff'><i class="icon-lock"></i>&nbsp;<b>Admin</b></a></li>
        </ul>
    </div>
</header><!--/#header-->

<section id="portfolio" style="margin-top: -1%">
    <div class="container">
        <div class="box" style="border-radius: 10px 10px">
            <div class="row">

                @foreach($images as $img)
                    <div class="col-md-4 col-sm-6" style="margin-top: 100px;">
                        <ul class="portfolio-items col-1">
                            <li class="portfolio-item apps">
                                <div class="item-inner" style="">
                                    <div class="portfolio-image">
                                        <img src="{{$img->fullPath()}}" alt="{{$img->name}}" style="height: 220px; width: 300px;">
                                        <div class="overlay">
                                            <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="{{$img->fullPath()}}"><i                                                                 class="icon-eye-open"></i></a>
                                        </div>
                                    </div>
                                    <h4><b>{{$img->name}}</b></h4><br/>
{{--                                    <p>{{$img->description}}</p>--}}
                                </div>
                            </li><!--/.portfolio-item-->
                        </ul>
                    </div>
                @endforeach

            </div>
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#portfolio-->

<section id="contact">
    <div class="container">
        <div class="box last" style="border-radius: 10px 10px; margin-top: 5.5%; width: 100%;">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contact Us.</h1><hr style="width: 70%;margin-left: 0%"/>
                    {{--<address>--}}
                    {{--<h4><b>Newland Hotels and Suites.</b></h4>--}}
                    {{--11 Koforidua St, Off Mambolo St<br>--}}
                    {{--Wuse Zone 2, Abuja.<br>--}}
                    {{--<abbr title="Phone">Tel:</abbr> (234) 456-7890-899--}}
                    {{--</address>--}}
                </div>
                <div class="col-sm-6">
                    <address>
                        <h4 style="text-decoration: underline"><b>Newland Hotels and Suites.</b></h4>
                        <div class="row">
                            <div class="col-md-6">
                                11 Koforidua St, Off Mambolo St<br>
                                Wuse Zone 2, Abuja.<br>
                            </div>
                            <div class="col-md-6">
                                <abbr title="Phone"><b>Tel:</b></abbr><br/>
                                08090555427, 08063061008,<br>
                                092918034, 092918033.
                            </div>
                        </div>
                    </address>
                    {{--<h1>Connect With Us.</h1><hr style="width: 70%;margin-left: 0%"/>--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<ul class="social">--}}
                    {{--<li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                    {{--<ul class="social">--}}
                    {{--<li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div><!--6-->
        </div><!--/.row-->
    </div><!--/.box-->
</section><!--/#contact-->


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <b>&copy;</b>
                <?php
                $date = date('Y-M-d');
                $subt = substr($date, 0, 4);
                ?> {{$subt}}&nbsp;
                <a target="_blank" href="" title=""><b>Newland Hotels and Suites.</b></a>. All Rights Reserved.
            </div>
            <!--div class="col-sm-6">
                <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
            </div-->
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>
<script src="js/custom/default.js"></script>
{{--<script>--}}
{{--jQuery(document).ready(function() {--}}
{{--var DatePicker = function () {--}}
{{--//function to initiate bootstrap-datepicker--}}
{{--var runDatePicker = function () {--}}
{{--$('.date-picker').datepicker({--}}
{{--autoclose: true,--}}
{{--format: 'yyyy-mm-dd',--}}
{{--});--}}
{{--};--}}
{{--return {--}}
{{--//main function to initiate template pages--}}
{{--init: function () {--}}
{{--runDatePicker();--}}
{{--}--}}
{{--};--}}
{{--}();--}}

{{--DatePicker.init();--}}
{{--});--}}
{{--</script>--}}
</body>
</html>