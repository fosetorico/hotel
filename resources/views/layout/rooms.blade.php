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

</head><!--/head-->

<body data-spy="scroll" data-target="" data-offset="0">
    <header id="header" role="banner">
        <div style="background-color: white;width:100%">
            <img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 90px; width: 40%">
        </div>
        <div id='cssmenu' style="margin-left: 5%;width:90%; height:80px">
            <ul style="margin-top: 1%;">
                <li><a href='/'><b><i class="icon-home"></i>&nbsp;Home</b></a></li>
                <li><a href='/services'><b>Services</b></a></li>
                <li class='active'><a href='/rooms'><b>Rooms</b></a></li>
                <li><a href='/gallery'><b>Gallery</b></a></li>
                <li><a href='/contact'><b>Contact</b></a></li>
            </ul>
        </div>
    </header><!--/#header-->

    @foreach($cart as $car)
        <section id="main-slider" class="carousel" style="margin-top:80px;height: 750px">
            <div class="carousel-inner" style="margin-top:-90px;height:800px">
                <?php $i = 0?>
                @if($car->rooms()->count() > 0)
                    @foreach($car->rooms()->get() as $room)
                        @if($i < 1)
                            <div class="item active" style="background-color: ghostwhite;height: 700px;">
                        @else
                            <div class="item" style="background-color: ghostwhite;height: 700px;">
                        @endif
                                <div class="container" style=""><br/>
                                    <div class="center gap">
                                        <h2><b>{{$car->name}}.</b></h2><hr/>
                                    </div>
                                    <div class="row" style="margin-top: 4%">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="carousel-content" style="">
                                                    <img class="" src="{{$room->fullPath()}}" alt="" style="width:96%;height:400px;">
                                            </div>
                                        </div>
                                    </div><br/>
                                    <h4><b> Room {{$room->name}}</b></h4>
                                </div><br/>
                                <div class="form-group">
                                    <center><button value="{{$car->id}}" style="width: 30%;" type="button" class="reserveRoomBtn btn btn-primary "><b>Reserve</b></button></center>
                                </div>
                             </div>
                        <?php $i++ ?>
                    @endforeach
                @endif
            </div><!--/.carousel-inner-->
            <!--a class="prev" href="#main-slider" data-slide="prev" style="margin-top: 6.5%"><i class="icon-angle-left"></i></a>
            <a class="next" href="#main-slider" data-slide="next" style="margin-top: 6.5%"><i class="icon-angle-right"></i></a-->
        </section><!--/#main-slider-->
    @endforeach

    <section id="pricing" class="hide" style="margin-top: 5%;margin-top: 4.53%">
        <div class="container">
            <div class="box" style=" border-radius: 10px 10px">
                <div class="center" >
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
                        <div id="msg_div" class="alert">

                        </div>
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

    <section id="contact">
        <div class="container">
            <div class="box last" style="border-radius: 10px 10px; margin-top: 5.5%; width: 100%;">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Our Address.</h1><hr style="width: 70%;margin-left: 0%"/>
                        <address>
                            <h4><b>Newland Hotel and Suite.</b></h4>
                            11 Koforidua St, Off Mambolo St<br>
                            Wuse Zone 2, Abuja.<br>
                            <abbr title="Phone">Tel:</abbr> (234) 456-7890-899
                        </address>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Connect With Us.</h1><hr style="width: 70%;margin-left: 0%"/>
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
                    </div>
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.box-->
        </div><!--/.container-->
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
                    <a target="_blank" href="" title=""><b>Newland Hotels and Suites</b></a>. All Rights Reserved.
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