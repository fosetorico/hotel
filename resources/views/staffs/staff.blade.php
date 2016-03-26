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
    <div id='cssmenu' style="margin-left: 0%;width:100%; height:80px">
        <ul style="margin-top: 1%;">
            <li class='active'><a href='/staff'><b style="">Reservation</b></a></li>
            <li><a href='/upload'><b>Upload</b></a></li>
            <li><a href='/availability'><b>Availability</b></a></li>
            <li><a href='/checking'><b>Checking</b></a></li>
            <li><a href='/edit_detail'><b>Edit Detail</b></a></li>
            <li class="pull-right"><a href='/auth/logout'><b>Logout</b></a></li>
            {{--<li><a href=''><b>Gallery</b></a></li>--}}
            {{--<li class='active'><a href='/contact'><b>Contact</b></a></li>--}}
        </ul>
    </div>
</header><!--/#header-->
<section id="" class="" style="height:120px">

</section><!--/#main-slider-->

<section id="services" STYLE="">
    <div class="container">
        <div class="box first" STYLE="margin-top:2%">
            <div class="center gap">
                <h3><b>Check Reservation Details.</b></h3>
                welcome <b>{{Auth::user()->fullName()}}</b>
            </div>
            <div style="border:1px solid #c0c0c0; margin-left: 7%; width: 85%; border-radius: 10px 10px;">
                <div class="row" style="margin-top: 5%">
                    <form class="" method="post" action="/staff" role="form" style="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-sm-6" style="" id="" >
                            <div class="" style="margin-left: 5%">
                                <label class="" for="">Mobile No:</label>
                                <div class="row" style="">
                                    <table style="margin-left: 1%; width: 90%" cellpadding="7" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td width="80%"><input type="text" style="" name="mobile" id="mobile" class="form-control" required="required" placeholder="Mobile No"></td>
                                                <td width="20%"><button style="" type="submit" class="btn btn-primary "><b>Search</b></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{--<div class="form-group col-sm-9">--}}
                                        {{--<input type="text" style="" name="mobile" id="mobile" class="form-control" required="required" placeholder="Mobile No">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group col-sm-3">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<center><button style="margin-left: -40%" type="submit" class="btn btn-primary "><b>Search</b></button></center>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="" method="post" action="/staff" role="form" style="">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-sm-6" style="" id="" >
                            <div class="" style="margin-left: 5%">
                                <label class="" for="">Email Address:</label>
                                <div class="row" style="">
                                    <table style="margin-left: 1%; width: 90%" cellpadding="7" cellspacing="0">
                                        <tbody>
                                        <tr>
                                            <td width="80%"><input type="text" style="" name="email" id="email" class="form-control" required="required" placeholder="Email Address"></td>
                                            <td width="20%"><button style="" type="submit" class="btn btn-primary "><b>Search</b></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{--<div class="form-group col-sm-9">--}}
                                        {{--<input type="text" style="" name="email" id="email" class="form-control" required="required" placeholder="Email Address">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group col-sm-3">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<center><button style="margin-left: -40%" type="submit" class="btn btn-primary "><b>Search</b></button></center>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br><br>
            </div><br/>
            @if(isset($customer))
                <div class="row" id="reserve_table">
                    <div class="col-md-12 col-md-offset-0">
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Surname</th>
                                    <th>First Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Room</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(($customer->count() > 0))
                                    <?php $i=1?>
                                    @foreach($customer as $cus)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$cus->sname}}</td>
                                            <td>{{$cus->fname}}</td>
                                            <td>{{$cus->mobile}}</td>
                                            <td>{{$cus->email}}</td>
                                            <td>{{$cus->roomNo()->first()->room_no}}</td>
                                            <td>{{$cus->check_in->format('D, jS, M Y')}}</td>
                                            <td>{{$cus->check_out->format('D, jS, M Y')}}</td>
                                            <td>
                                                <button type="button" value="{{$cus->id}}" class="btn update_stat btn-primary btn-sm"><b>Update</b></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr><th colspan="8">No Record Found</th></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            <div id="update_res" class="hide" style="border:1px solid #c0c0c0; margin-left: 7%; width: 85%; border-radius: 10px 10px; margin-top:0%">
                {{--<form class="" method="post" action="/update_reserve" role="form" style="margin-top: -2.5%;margin-left: 5%">--}}
                    <div class="row" style="margin-top: 5%">
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <div class="" style="" id="" >
                            <div class="" style="margin-left: 5%">
                                <input type="hidden" name="reserve_id" id="reserve_id">
                                <table style="margin-left: 1%; width: 90%" cellpadding="7" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td width="50%">
                                                <label class="" for="">Check In:</label><br>
                                                <input type="text" style="" name="update_in" id="update_in" class="form-control date-picker" required="required" placeholder="Check in">
                                            </td>
                                            <td width="50%">
                                                <label class="" for="">Check Out:</label>
                                                <input type="text" style="" name="update_out" id="update_out" class="form-control date-picker" required="required" placeholder="Check Out">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                <button style="margin-left:8%; width:80%" type="button" id="checkIn_btn" class="btn btn-primary "><b>Check In</b></button>
                                            </td>
                                            <td width="50%">
                                                <button style=" margin-left:8%;width:80%" type="button" id="checkOut_btn" class="btn btn-primary "><b>Check Out</b></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                {{--<label class="" for="">Check In:</label>--}}
                                {{--<div class="row" style="">--}}
                                    {{--<div class="form-group col-sm-9">--}}
                                        {{--<input type="text" style="" name="update_in" id="update_in" class="form-control date-picker" required="required" placeholder="Check in">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        {{--<div class="col-sm-6" style="" id="" >--}}
                            {{--<div class="" style="margin-left: -3%">--}}
                                {{--c--}}
                                {{--<div class="row" style="">--}}
                                    {{--<div class="form-group col-sm-9">--}}
                                        {{--<input type="text" style="" name="update_out" id="update_out" class="form-control date-picker" required="required" placeholder="Check Out">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    {{--<input type="hidden" name="reserve_id" id="reserve_id">--}}
                    {{--<div class="row" style="">--}}
                        {{--<div class="col-sm-6" style="" id="" >--}}
                            {{--<div class="form-group" style="margin-top:-11%; height:50px">--}}
                                {{--<button style="margin-top: -20%; margin-left:8%;width:80%" type="button" id="checkIn_btn" class="btn btn-primary "><b>Check In</b></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6" style="" id="" >--}}
                            {{--<div class="form-group" style="margin-top:-11%; height:50px">--}}
                                {{--<button style="margin-top: -20%; margin-left:-10%;width:80%" type="button" id="checkOut_btn" class="btn btn-primary "><b>Check Out</b></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            </div><br/>
        <br/><br/>
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