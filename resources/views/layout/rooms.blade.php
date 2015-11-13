<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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

@foreach($cart as $car)
    <section id="main-slider" class="carousel" style="height: 700px">
        <div class="carousel-inner" style="margin-top:-90px;height:750px">
            <?php $i = 0?>
            @if($car->rooms()->count() > 0)
                @foreach($car->rooms()->get() as $room)
                    @if($i < 1)
                        <div class="item active" style="background-color: ghostwhite;height: 650px;">
                    @else
                        <div class="item" style="background-color: ghostwhite;height: 650px;">
                    @endif
                            <div class="container" style=""><br/>
                                <div class="center gap">
                                    <h2>{{$car->name}}.</h2><hr/>
                                </div>
                                <div class="row" style="margin-top: 4%">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="carousel-content" style="">
                                                <img class="" src="{{$room->image}}" alt="" style="width:96%;height:400px;">
                                        </div>
                                    </div>
                                    <p> Room {{$room->name}}</p>
                                </div>
                            </div><br/><br/>
                            <div class="form-group">
                                <center><button value="{{$car->id}}" style="width: 30%" type="button" class="reserveRoomBtn btn btn-primary "><b>Reserve</b></button></center>
                            </div>
                         </div>
                    {{$i++}}
                @endforeach
            @endif
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev" style="margin-top: 6.5%"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next" style="margin-top: 6.5%"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->
@endforeach

<section id="pricing" class="hide" style="margin-top: 5%">
    <div class="container">
        <div class="box">
            <div class="center" style="margin-top: -2%">
                <h2>Room Reservation.</h2>
            </div>
            <div id="pricing-table" class="row" style="border:1px solid #c0c0c0; border-radius: 5px 5px">


                <div class="col-sm-6" style="">
                    <ul class="plan" style="margin-top:5%">
                        <li class="plan-name"><h4><b><label id="room_name"></label></b></h4></li>
                        <div id="pricing-table2" class="row">
                            <div class="col-sm-6" style="">
                                <div class="portfolio-image" style="width:100%;">
                                    <img src="" id="cat_image1" alt="" style="width:100%; height:200px; margin-left:5%">
                                    <!--div class="overlay">
                                        <a class="preview btn btn-danger" id="cat_image2" title="Lorem ipsum dolor sit amet" href=""><i class="icon-eye-open"></i></a>
                                    </div-->
                                </div><br/><br/>
                            </div>
                            <div class="col-sm-6" style="">
                                <section style="">
                                    <label style="margin-top:16%"><h2><i>&#8358;<label id="room_price"></label></i></h2></label>
                                </section>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="col-sm-6" style="" id="summaryDiv">
                </div>
                <div class="col-sm-6 hide" style="" id="summaryForm">
                    <center><label><i>There Are <b><label id="room_count" style="color:red"></label></b> Rooms Available That Match Your Choice</i></label><br/><br/></center>
                    <form id="reservation-form" method="post" action="/reserve-room" role="form" style="margin-top: -2.5%">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="">
                            <div class="col-sm-6" style="" id="" >
                                <div class="">
                                    <label class="" for="">Enter Surname:</label>
                                    <div class="form-group">
                                        <input type="text" style="" name="sname" id="sname" class="form-control" required="required" placeholder="Surename">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" style="" id="" >
                                <div class="">
                                    <label class="" for="">Enter Firstname:</label>
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" class="form-control" required="required" placeholder="Firstname">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="" for="">Select Room:</label>
                            <div class="form-group">
                                <select class="form-control" required="required" name="roomNo_id" id="roomNo_id">

                                </select>
                            </div>
                        </div>
                        <div class="row" style="">
                            <div class="col-sm-6" style="" id="" >
                                <div class="">
                                    <label class="" for="">Enter Phone Number:</label>
                                    <div class="form-group">
                                        <input type="text" name="mobile" id="mobile" class="form-control" required="required" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" style="" id="" >
                                <div class="form-group">
                                    <label class="" for="">Enter E-Mail:</label>
                                    <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="">
                            <div class="col-sm-6" style="" id="" >
                                <div class="form-group">
                                    <label class="" for="">Check In:</label>
                                    <input type="text" name="check_in" id="check_in" class="form-control date-picker" required="required" placeholder="Check In">
                                </div>
                            </div>
                            <div class="col-sm-6" style="" id="" >
                                <div class="form-group">
                                    <label class="" for="">Check Out:</label>
                                    <input type="text" name="check_out" id="check_out" class="form-control date-picker" required="required" placeholder="Check Out">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <center><button id="submitForm" style="width: 80%" type="submit" class="btn btn-primary "><b>Reserve</b></button></center>
                        </div>
                    </form>
                </div><br/>

            </div>
        </div>
    </div>
</section><!--/#pricing-->


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <b>&copy;</b> 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><b>Newlnd Hotels and Suites</b></a>. All Rights Reserved.
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