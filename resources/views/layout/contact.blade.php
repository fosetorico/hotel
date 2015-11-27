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
    <link href="css/datepicker/css/datepicker.css" rel="stylesheet">
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

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script language="javascript" type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(9.055584, 7.461189),
                zoom: 17
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            var myLatlng = new google.maps.LatLng(9.055584, 7.461189);
            var marker = new google.maps.Marker({
                position: myLatlng, map: map,
                title: "WUSE ZONE 6, ABUJA, FEDERAL CAPITAL TERRITORY (FCT), NIGERIA."
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head><!--/head-->

<body data-spy="scroll" data-target="" data-offset="">
    <header id="header" role="">
        <div style="background-color: white;width:100%">
            <img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 90px; width: 40%">
        </div>
        <div id='cssmenu' style="margin-left: 5%;width:90%; height:80px">
            <ul style="margin-top: 1%;">
                <li><a href='/'><b><i class="icon-home"></i>&nbsp;Home</b></a></li>
                <li><a href='/services'><b>Services</b></a></li>
                <li><a href='/rooms'><b>Rooms</b></a></li>
                <li><a href='/gallery'><b>Gallery</b></a></li>
                <li class='active'><a href='/contact'><b>Contact</b></a></li>
            </ul>
        </div>
    </header><!--/#header-->

    <section id="pricing" class="" style="margin-top: 210px">
        <div id="map-canvas" style="border:1px solid #C0C0C0; height:420px;"></div>
    </section><br/><br/><br/>

    <section id="contact">
        <div class="container">
            <div class="box last" style="border-radius: 30px 30px">
                <div class="row">
                    <div class="col-sm-7">
                        <h1>Contact Us.</h1><hr style="width: 70%;margin-left: 0%"/>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button  style="margin-left: 15%;width:70%" type="submit" class="btn btn-primary btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-5">
                        <h1>Our Address.</h1><hr style="width: 70%;margin-left: 0%"/>
                        <div class="row">
                            <div class="col-md-10">
                                <address>
                                    <h4><b>Newland Hotels and Suites.</b></h4>
                                    11 Koforidua St, Off Mambolo St<br>
                                    Wuse Zone 2, Abuja.<br>
                                    <abbr title="Phone">Tel:</abbr> (234) 456-7890-899
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us.</h1><hr style="width: 70%;margin-left: 0%"/>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section>

    {{--<section id="contact">--}}
        {{--<div class="container">--}}
            {{--<div class="box last">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<h1>Our Address.</h1><hr style="width: 70%;margin-left: 0%"/>--}}
                        {{--<address>--}}
                            {{--<h4><b>Newland Hotel and Suite.</b></h4>--}}
                            {{--11 Koforidua St, Off Mambolo St<br>--}}
                            {{--Wuse Zone 2, Abuja.<br>--}}
                            {{--<abbr title="Phone">Tel:</abbr> (234) 456-7890-899--}}
                        {{--</address>--}}
                        {{--<div class="status alert alert-success" style="display: none"></div>--}}
                            {{--<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<input type="text" class="form-control" required="required" placeholder="Name">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<input type="text" class="form-control" required="required" placeholder="Email address">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-12">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<button type="submit" class="btn btn-danger btn-lg">Send Message</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                    {{--</div><!--/.col-sm-6-->--}}
                    {{--<div class="col-sm-6">--}}
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
                    {{--</div>--}}
                {{--</div><!--/.col-sm-6-->--}}
            {{--</div><!--/.row-->--}}
        {{--</div><!--/.box-->--}}
        {{--</div><!--/.container-->--}}
    {{--</section><!--/#contact-->--}}

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
<script src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="js/main.js"></script>
<script src="js/custom/default.js"></script>
<script>
    jQuery(document).ready(function() {
        var DatePicker = function () {
            //function to initiate bootstrap-datepicker
            var runDatePicker = function () {
                $('.date-picker').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                });
            };
            return {
                //main function to initiate template pages
                init: function () {
                    runDatePicker();
                }
            };
        }();

        DatePicker.init();
    });
</script>
</body>
</html>