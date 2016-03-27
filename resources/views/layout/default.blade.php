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
        #main-slider{height:650px; margin-top: 60px}
        .carousel-inner{margin-top:-140px}
        .slid_img{width:96%;height:550px;}
        #cat_image1{width:105%; height:200px; margin-left:0%}
        @media(max-width: 815px) and (min-width: 700px){
            #main-slider{height:550px; margin-top: 60px}
            .carousel-inner{margin-top:-90px}
            .slid_img{width:86%;height:400px;}
            #cat_image1{width:105%; height:200px; margin-left:0%}
        }
        @media(max-width: 700px) and (min-width: 570px){
            #main-slider{height:500px; margin-top: 60px}
            .carousel-inner{margin-top:-90px}
            .slid_img{width:90%;height:350px;}
            #cat_image1{width:105%; height:200px; margin-left:0%}
            /*.prev{margin-top: 200px}*/
        }
        @media(max-width: 570px) and (min-width: 0px){
            #main-slider{height:450px; margin-top: 60px}
            .carousel-inner{margin-top:-90px}
            .slid_img{width:100%;height:300px;}
            #cat_image1{width:105%; height:150px; margin-left:0%}
        }

    </style>

</head><!--/head-->

<body>
    <header id="header" role="">
        <div style="background-color: white;width:100%">
            <img src="/uploads/logo.jpg" alt="" style="margin-left: 25%;height: 55px; width: 40%">
        </div>
        <div id='cssmenu' style="margin-left: 5%;width:90%;">
            <ul style="margin-top: 0%">
                <li class='active'><a href='/'><b><i class="icon-home"></i>&nbsp;Home</b></a></li>
                {{--<li><a href='/services'><b>Services</b></a></li>--}}
                <li><a href='/rooms'><b>Rooms</b></a></li>
                <li><a href='/gallery'><b>Gallery</b></a></li>
                <li><a href='/contact'><b>Contact</b></a></li>
                <li class="pull-right"><a href='/staff'><i class="icon-lock"></i>&nbsp;<b>Admin</b></a></li>
            </ul>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel" style="">
        <div class="carousel-inner" style="">
            <div class="item active" style="">
                <div class="container" style="">
                    <div class="carousel-content" style="">
                        <img class="slid_img" src="uploads/gallery/slider-bg copy.jpg" alt="Front View" id="slid_img" style="">
                    </div>
                </div>
            </div>

            @foreach($slide as $slid)
                <div class="item" style="">
                    <div class="container" style="">
                        <div class="carousel-content" style="">
                            <img class="slid_img" src="{{$slid->fullPath()}}" alt="{{$slid->name}}" style="">
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

        <!--div style="border: 2px solid blue;height: 15px; width: 815px;"></div>
        <div style="border: 2px solid blue;height: 15px; width: 700px;"></div>
        <div style="border: 2px solid blue;height: 15px; width: 570px;"></div>
        <div style="border: 2px solid blue;height: 15px;"></div>
        <div style="border: 2px solid blue;height: 15px;"></div>
        <br/-->

    <section id="portfolio" style="margin-top: -1%">
        <div class="container">
            <div class="box" style="border-radius: 10px 10px">
                <div class="row">

                    @foreach($images as $img)
                        <div class="col-md-4 col-sm-6">
                            <ul class="portfolio-items col-1">
                                <li class="portfolio-item apps">
                                    <div class="item-inner">
                                        <div class="portfolio-image">
                                            <img src="{{$img->fullPath()}}" alt="{{$img->name}}">
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="{{$img->fullPath()}}"><i                                                                 class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                        <h4><b>{{$img->name}}</b></h4><br/>
                                        <p>{{$img->description}}</p>
                                    </div>
                                </li><!--/.portfolio-item-->
                            </ul>
                        </div>
                    @endforeach

                </div>
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="portfolio">
        <div class="container">
            <div class="box" style="border-radius: 10px 10px; background-color: ghostwhite">
                <div class="center gap" style="margin-top: -5%">
                    <h3><b><label class="h2">Room Category.</label></b></h3>
                </div><!--/.center-->
                <div class="row" style="margin-top: -5%">

                    @foreach($cart as $carte)
                        <div class="col-md-4 col-sm-6">
                            <ul class="portfolio-items col-1">
                                <li class="portfolio-item apps">
                                    <div class="item-inner">
                                        <div class="portfolio-image">
                                            <img src="{{$carte->image()->first()->fullPath()}}" alt="{{$carte->name}}">
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="{{$carte->image()->first()->fullPath()}}"><i                                                                 class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                        <h4><b>{{$carte->name}}</b></h4><br/>
                                            <center><button type="button" value="{{$carte->id}}" class="btn book_room btn-primary btn-sm" style="width: 80%"><b>Reserve</b></button></center>
                                    </div>
                                </li><!--/.portfolio-item-->
                            </ul>
                        </div>
                    @endforeach

                </div>
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="pricing" class="hide">
        <div class="container">
            <div class="box" style="border-radius: 10px 10px">
                <div class="center" style="margin-top: -5%">
                    <h3><b><label class="h2">Room Reservation.</label></b></h3>
                </div>

                <div id="pricing-table" class="row" style="border:1px solid #c0c0c0; border-radius: 5px 5px">


                    <div class="col-sm-6" style="">
                        <ul class="plan" style="margin-top:5%">
                            <li class="plan-name"><h4><b><label id="room_name"></label></b></h4></li>
                            <div id="" class="row">
                                <div class="col-sm-10" style="margin-left: 10%;">
                                    <div class="portfolio-image" style="width:80%;">
                                        <img src="" id="cat_image1" alt="" style=""><br/>
                                        <h4><label style="">
                                            <i>Start Price:<b>&#8358;&nbsp;<label id="start"></label></b></i><hr style="margin-left: -50%;width:200%;"/>
                                            <i>Normal Price:<b>&#8358;&nbsp;<label id="room_price"></label></b></i><hr style="margin-left: -50%;width:200%;"/>
                                        </label></h4>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="col-sm-6" style="" id="summaryDiv">
                    </div>

                    <div class="col-sm-6 hide" style="" id="summaryForm">
                        <center><label><i>There Is/Are <b><label id="room_count" style="color:red"></label></b> Room(s) Available That Match Your Choice</i></label><br/><br/></center>

                        <div id="msg_div" class="alert hidden">
                        </div>

                        <form id="reservation-form" class="contact-form" method="post" action="/reserve-room" role="form" style="">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row" style="">
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Surname:</label>
                                            <div class="form-group">
                                                <input type="text" style="" name="sname" id="sname" class="form-control" required="required" placeholder="Surename">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Firstname:</label>
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
                                            <label class="" for="">Mobile Number:</label>
                                            <div class="form-group">
                                                <input type="text" name="mobile" id="mobile" class="form-control" required="required" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="form-group">
                                            <label class="" for="">E-Mail:</label>
                                            <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="form-group">
                                            <label class="" for="">Check In:</label>
                                            <input type="text" name="check_in" id="check_in" class="form-control date-picker2" required="required" placeholder="Check In">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="form-group">
                                            <label class="" for="">Check Out:</label>
                                            <input type="text" name="check_out" id="check_out" class="form-control date-picker2" required="required" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><button id="submitForm" style="width: 80%" type="submit" class="btn btn-primary "><b>Reserve</b></button></center>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/#pricing-->

    <section id="services" STYLE="margin-top: 1.6%">
        <div class="container">
            <div class="box first" style="border-radius: 10px 10px; margin-top: -2%">
                <div class="center gap" STYLE="">
                    <h4><b><i>Forgot Your Reservation Details?...Search Here.</i></b></h4>
                </div>
                <div style="border:1px solid #c0c0c0;border-radius: 10px 10px; ">
                    <div class="row" style="margin-top: 5%">
                        <form id="mobile_form" class="" method="post" action="/check" role="form" style="">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-sm-6" style="" id="" >
                                <div class="" style="">
                                    <label class="" style="margin-left: 5%" for="">Mobile No:</label>
                                    <div class="row" style="">
                                        <table style="margin-left: 5%; width: 90%" cellpadding="7" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%"><input type="text" style="" name="mobile_search" id="mobile_search" class="form-control" required="required" placeholder="Mobile No"></td>
                                                    <td width="20%"><button id ="mobile_search_btn" style="" type="submit" class="btn btn-primary "><b>Search</b></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form id="email_form" class="" method="post" action="/check" role="form" style="">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="col-sm-6" style="" id="" >
                                <div class="" style="">
                                    <label class="" style="margin-left: 5%" for="">Email Address:</label>
                                    <div class="row" style="">
                                        <table style="margin-left: 5%; width: 90%" cellpadding="7" cellspacing="0">
                                            <tbody>
                                            <tr>
                                                <td width="80%"><input type="text" style="" name="email_search" id="email_search" class="form-control" required="required" placeholder="Email Address"></td>
                                                <td width="20%"><button id ="email_search_btn" style="" type="submit" class="btn btn-primary "><b>Search</b></button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><br/><br/><br/>
                </div><br/>

                <div class="row" id="search_table"></div>

            </div>
        </div><!--/.container-->
    </section><!--/#services-->
    <div class="loader hidden" style="position:fixed; z-index: 1000; top:0; left:0; height: 100%;
        width:100%; background: rgba(0, 0, 0, .4) url('/uploads/loader.gif') 50% 50% no-repeat">
    </div>
    <section id="contact">
        <div class="container">
            <div class="box last" style="border-radius: 10px 10px">
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
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div>
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
{{--<script src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>--}}
<script src="js/main.js"></script>
<script src="js/custom/default.js"></script>
<script>
//    jQuery(document).ready(function() {
//        var DatePicker = function () {
//            //function to initiate bootstrap-datepicker
//            var runDatePicker = function () {
//                $('.date-picker').datepicker({
//                    autoclose: true,
//                    format: 'yyyy-mm-dd',
//                });
//            };
//            return {
//                //main function to initiate template pages
//                init: function () {
//                    runDatePicker();
//                }
//            };
//        }();
//
//        DatePicker.init();
//    });
</script>
</body>
</html>