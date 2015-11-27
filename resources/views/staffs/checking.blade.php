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

    <link href="css/datepicker/css/datepicker.css" rel="stylesheet">
</head><!--/head-->

<body data-spy="scroll" data-target="" data-offset="">
<header id="header" role="">
    <div style="background-color: white;width:100%">
        <img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 90px; width: 40%">
    </div>
    <div id='cssmenu' style="margin-left: 5%;width:90%; height:80px">
        <ul style="margin-top: 1%;">
            <li><a href='/staff'><b style="">Check Reservation</b></a></li>
            <li><a href='/upload'><b>Upload Images</b></a></li>
            <li><a href='/availability'><b>Availability</b></a></li>
            <li class='active'><a href='/checking'><b>Checking</b></a></li>
            <li><a href='/edit_detail'><b>Edit Details</b></a></li>
            <li class="pull-right"><a href='/auth/logout'><i class=" icon-off"></i>&nbsp;<b>Logout</b></a></li>
        </ul>
    </div>
</header><!--/#header-->
<section id="" class="" style="height:120px">

</section><!--/#main-slider-->

<!-- start: FLASH MESSAGE -->


<section id="services" STYLE="">
    <div class="container">
        <div class="box first" STYLE="margin-top:2%">
            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="/checking" data-toggle="">Check In.</a></li>
                    <li><a href="/c_out" data-toggle="">Check out.</a></li>
                </ul><br/><hr style="margin-left:13%; width: 73%;"/>


                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div style="border:2px solid #c0c0c0; margin-left: 10%; width: 80%; border-radius: 10px 10px;">
                            @if(Session::has('flash_message'))
                                {!! Session::get('flash_message') !!}
                            @endif

                            @include('errors.errors')<br>
                            <div class="center gap">
                                <h3><b>Check In Customer.</b></h3>
                                welcome {{Auth::user()->fullName()}}
                            </div>

                            <form method="post" action="/checkIn-room" role="form" style="margin-left: 10%;width:80%;margin-top: -2.5%">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row" style="">
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Enter Surname:</label>
                                            <div class="form-group">
                                                <input type="text" style="" name="sname" id="sname" value="{{ Input::old('sname') }}" class="form-control" required="required" placeholder="Surename">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Enter Firstname:</label>
                                            <div class="form-group">
                                                <input type="text" name="fname" id="fname" class="form-control" value="{{ Input::old('fname') }}" required="required" placeholder="Firstname">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Select Room Category:</label>
                                            <div class="form-group">
                                                <select class="form-control" required="required" name="roomNoCat_id" id="roomNoCat_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($cart as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Select Room:</label>
                                            <div class="form-group">
                                                <select class="form-control" required="required" name="roomNo_id" id="roomNo_id">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="">
                                            <label class="" for="">Enter Mobile No:</label>
                                            <div class="form-group">
                                                <input type="text" name="mobile" id="mobile" value="{{ Input::old('mobile') }}" class="form-control" required="required" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="form-group">
                                            <label class="" for="">Enter E-Mail:</label>
                                            <input type="text" name="email" id="email" class="form-control" value="{{ Input::old('email') }}" required="required" placeholder="Email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="form-group">
                                            <label class="" for="">Check In:</label>
                                            <input type="text" name="check_in" id="check_in" value="{{ Input::old('check_in') }}" class="form-control date-picker" required="required" placeholder="Check In">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="" id="" >
                                        <div class="form-group">
                                            <label class="" for="">Check Out:</label>
                                            <input type="text" name="check_out" id="check_out" value="{{ Input::old('check_out') }}" class="form-control date-picker" required="required" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><button style="width: 80%" type="submit" class="btn btn-primary "><b>Check In</b></button></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><br/><br/><br/>
            </div>
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
<script src="js/custom/staff.js"></script>
<script>
//    jQuery(document).ready(function() {
//        var DatePicker = function () {
//            //function to initiate bootstrap-datepicker
//            var runDatePicker = function () {
//                $('.date-picker').datepicker({
//                    autoclose: true,
//                    format: 'yyyy-mm-dd',
//                    minDate: "0"
//                });
//            };
//            return {
//                //main function to initiate template pages
//                init: function () {
//                    runDatePicker();
////                    runDatePicker2();
//                }
//            };
//        }();
//
//        DatePicker.init();
//    });
</script>
</body>
</html>