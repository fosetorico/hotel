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
                    <li><a href="">Services</a></li>
                    <li><a href="">Rooms</a></li>
                    <li><a href="">Gallery</a></li>
                    <!--li><a href="">About Us</a></li-->
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header><!--/#header-->

<section id="main-slider" class="carousel" style="height:650px">
    <div class="carousel-inner" style="margin-top:-90px">
        <div class="item active" style="">
            <div class="container" style="">
                <div class="carousel-content" style="">
                    <img class="" src="images/portfolio/thumb/slider-bg copy.jpg" alt="" style="width:96%;height:500px;">
                </div>
            </div>
        </div>

        @foreach($slide as $slid)
            <div class="item" style="">
                <div class="container" style="">
                    <div class="carousel-content" style="">
                        <img class="" src="{{$slid->img}}" alt="" style="width:96%;height:500px;">
                    </div>
                </div>
            </div>
        @endforeach

    </div><!--/.carousel-inner-->
    <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
    <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
</section><!--/#main-slider-->

<section id="services" STYLE="margin-top: 2%">
    <div class="container">
        <div class="box first">
            <div class="row">

                @foreach($images as $img)
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img class="img-thumbnail" src="{{$img->img}}" alt="" style="">
                            <h4>{{$img->name}}</h4>
                            <p>{{$img->description}}</p>
                        </div>
                    </div>
                @endforeach

            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="portfolio">
    <div class="container">
        <div class="box">
            <div class="center gap">
                <h2>Room Cartegory.</h2>
            </div><!--/.center-->
            <ul class="portfolio-items col-3">

                @foreach($cart as $carte)
                    <li class="portfolio-item apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="{{$carte->image()->first()->image}}" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="{{$img->img}}"><i                                                                 class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h4><b>{{$carte->name}}</b></h4><br/>
                                <center><button type="button" value="{{$carte->id}}" class="btn book_room btn-primary btn-sm" style="width: 80%"><b>Reserve</b></button></center>
                        </div>
                    </li><!--/.portfolio-item-->
                @endforeach

            </ul>
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#portfolio-->

<section id="pricing" class="hide">
    <div class="container">
        <div class="box">
            <div class="center" style="margin-top: -5%">
                <h2>Room Reservation.</h2>
            </div>
            <div id="pricing-table" class="row" style="border:1px solid #c0c0c0; border-radius: 5px 5px">


                <div class="col-sm-6" style="">
                    <ul class="plan" style="margin-top:5%">
                        <li class="plan-name"><h4><b><label id="room_name"></label></b></h4></li>
                        <div id="pricing-table" class="row">
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
                <!--div class="col-sm-6" style="" id="summaryDiv">
                    <section style="margin-top: 10%;width: 90%;margin-left: 5%">
                        <center><label><h4><b><i>Your Reservation Details...</i></b></h4></label></center>
                        <div class="row" style="background-color: white; border-radius:20px 20px">
                            <div class="col-sm-6" style="margin-top: 3.5%" id="" >
                                <div class=""><label class="" for="">Surname:</label>
                                    <label class="" for="">'+data.sname+'</label>
                                </div><br/>
                                <div class=""><label class="" for="">Firstname:</label>
                                    <label class="" for="">'+data.fname+'</label>
                                </div><br/>
                                <div class=""><label class="" for="">Phone Number:</label>
                                    <label class="" for="">'+data.mobile+'</label>
                                </div><br/>
                                <div class=""><label class="" for="">Room Number:</label>
                                    <label class="" for="">'+data.roomNo+'</label>
                                </div><br/>
                            </div>
                            <div class="col-sm-6" style="margin-top: 3.5%" id="">
                                <div class=""><label class="" for="">Email Address:</label>
                                    <label class="" for="">'+data.email+'</label>
                                </div><br/>
                                <div class=""><label class="" for="">Check In:</label>
                                    <label class="" for="">'+data.check_in+'</label>
                                </div><br/>
                                <div class=""><label class="" for="">Check Out:</label>
                                    <label class="" for="">'+data.check_out+'</label>
                                </div><br/>
                            </div>
                        </div>
                    </section>
                </div-->

                <div class="col-sm-6" style="" id="summaryDiv">
                </div>
                <div class="col-sm-6 hide" style="" id="summaryForm">
                    <center><label><i>There Are <b><label id="room_count" style="color:red"></label></b> Rooms Available That Match Your Choice</i></label><br/><br/></center>
                    <form id="reservation-form" class="contact-form" method="post" action="/reserve-room" role="form" style="margin-top: -2.5%">
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
                </div>

            </div>
        </div>
    </div>
</section><!--/#pricing-->

<section id="about-us">
    <div- class="container">
        <div class="box">
            <div class="center">
                <h2>Meet the Team</h2>
                <p class="lead">Pellentesque habitant morbi tristique senectus et netus et<br>malesuada fames ac turpis egestas.</p>
            </div>
            <div class="gap"></div>
            <div id="team-scroller" class="carousel scale">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team1.jpg" alt="" ></p>
                                    <h3>Agnes Smith<small class="designation">CEO &amp; Founder</small></h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                    <h3>Donald Ford<small class="designation">Senior Vice President</small></h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team3.jpg" alt="" ></p>
                                    <h3>Karen Richardson<small class="designation">Assitant Vice President</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team3.jpg" alt="" ></p>
                                    <h3>David Robbins<small class="designation">Co-Founder</small></h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team1.jpg" alt="" ></p>
                                    <h3>Philip Mejia<small class="designation">Marketing Manager</small></h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                    <h3>Charles Erickson<small class="designation">Support Manager</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left-arrow" href="#team-scroller" data-slide="prev">
                    <i class="icon-angle-left icon-4x"></i>
                </a>
                <a class="right-arrow" href="#team-scroller" data-slide="next">
                    <i class="icon-angle-right icon-4x"></i>
                </a>
            </div>
        </div-->
    </div><!--/.container-->
</section><!--/#about-us-->

<section id="contact">
    <div class="container">
        <div class="box last">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Our Address.</h1><hr style="width: 70%;margin-left: 0%"/>
                    <address>
                        <h4><b>Newland Hotel and Suite.</b></h4>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107.<br>
                        <abbr title="Phone">Tel:</abbr> (123) 456-7890
                    </address>

                    <!--div class="status alert alert-success" style="display: none"></div>
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
                                    <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form-->

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