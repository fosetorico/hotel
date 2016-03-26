{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--<meta name="description" content="">--}}
    {{--<meta name="author" content="">--}}

    {{--<link rel="SHORTCUT ICON" href="uploads/icon.jpg" TYPE="image/jpg"/>--}}
    {{--<title>Newland Hotels and Suites.</title>--}}
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link href="css/prettyPhoto.css" rel="stylesheet">--}}
    {{--<link href="css/main.css" rel="stylesheet">--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="js/html5shiv.js"></script>--}}
    {{--<script src="js/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
    {{--<link rel="shortcut icon" href="images/ico/favicon.ico">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">--}}

    {{--<link rel="stylesheet" href="/css/styles.css">--}}
    {{--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>--}}
    {{--<script src="/js/script.js"></script>--}}

    {{--<link href="css/datepicker/css/datepicker.css" rel="stylesheet">--}}
{{--</head><!--/head-->--}}

{{--<body data-spy="scroll" data-target="" data-offset="">--}}
{{--<header id="header" role="">--}}
    {{--<div style="background-color: white;width:100%">--}}
        {{--<img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 90px; width: 40%">--}}
    {{--</div>--}}
    {{--<div id='cssmenu' style="margin-left: 5%;width:90%; height:80px">--}}
        {{--<ul style="margin-top: 1%;">--}}
            {{--<li><a href='/register'><b style=""><i class=" icon-pencil"></i>&nbsp; Register Staff</b></a></li>--}}
            {{--<li><a href='/view_staff'><b>View Details</b></a></li>--}}
            {{--<li><a href='/block'><b>Block & Unblock Staff</b></a></li>--}}
            {{--<li><a href='/edit_staff'><b>Edit Records</b></a></li>--}}
            {{--<li class='active'><a href='/billing'><b>Edit Billings</b></a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</header><!--/#header-->--}}
{{--<section id="" class="" style="height:120px">--}}

{{--</section><!--/#main-slider-->--}}

{{--<section id="services" STYLE="">--}}
    {{--<div class="container">--}}
        {{--<div class="box first" STYLE="margin-top:2%">--}}
            {{--<div class="center gap">--}}
                {{--<h3><b>Edit Billing Details.</b></h3> welcome {{Auth::user()->fullName()}}   <a href='/auth/logout'><b>Logout</b></a>--}}
            {{--</div>--}}
            {{--@if(($bill->count() > 0))--}}
                {{--@foreach($bill as $bil)--}}
                    {{--<div style="border:1px solid #c0c0c0; margin-left: 15%; width: 70%; border-radius: 10px 10px; height:180px">--}}
                        {{--<div class="center gap">--}}
                            {{--<h4><b>{{$bil->name}}</b></h4> <hr style="margin-left: 20%;width: 60%">--}}
                        {{--</div>--}}
                        {{--<div class="row" style="margin-top: 5%">--}}
                            {{--<form class="" method="post" action="/billing" role="form" style="margin-top: -2.5%;margin-left: 5%">--}}
                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{--<div class="row" style="margin-top: 0%; margin-left: 5%;">--}}
                                    {{--<div class="col-sm-6" style="margin-left: -4%" id="" >--}}
                                        {{--<div class="" style="margin-left: 5%">--}}
                                            {{--<label class="" for="">Current Bill:</label>--}}
                                            {{--<div class="row" style="">--}}
                                                {{--<div class="form-group col-sm-9">--}}
                                                    {{--<input type="text" value="{{$bil->price}}" style="" name="mobile" id="mobile" disabled="disabled" class="form-control">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6" style="margin-left: -4%" id="" >--}}
                                        {{--<div class="" style="margin-left: 5%">--}}
                                            {{--<label class="" for="">New Bill {&#8358;}:</label>--}}
                                            {{--<div class="form-group input-prepend col-sm-9">--}}
                                                {{--<input type="text" style="margin-left: -8%" name="bill" id="bill" class="form-control" required="required" placeholder="New Bill">--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group col-sm-3">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<center><button style="margin-left: -60%;width: 130%" type="submit" class="btn btn-primary "><b>Edit</b></button></center>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div><br><br>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--@endif--}}
            {{--<br/><br/>--}}
        {{--</div>--}}
    {{--</div><!--/.container-->--}}
{{--</section><!--/#services-->--}}

{{--<footer id="footer">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-6">--}}
                {{--<b>&copy;</b>--}}
                {{--<?php--}}
                {{--$date = date('Y-M-d');--}}
                {{--$subt = substr($date, 0, 4);--}}
                {{--?> {{$subt}}&nbsp;--}}
                {{--<a target="_blank" href="" title=""><b>Newland Hotels and Suites</b></a>. All Rights Reserved.--}}
            {{--</div>--}}
            {{--<!--div class="col-sm-6">--}}
                {{--<img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">--}}
            {{--</div-->--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer><!--/#footer-->--}}

{{--<script src="js/jquery.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/jquery.isotope.min.js"></script>--}}
{{--<script src="js/jquery.prettyPhoto.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
{{--<script src="js/custom/default.js"></script>--}}
{{--<script src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>--}}
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
{{--</body>--}}
{{--</html>--}}