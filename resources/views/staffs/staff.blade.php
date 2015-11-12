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

<section id="" class="" style="height:55px">

</section><!--/#main-slider-->

<section id="services" STYLE="">
    <div class="container">
        <div class="box first" STYLE="margin-top:1%">
            <div class="center gap">
                <h3><b>Check Reservation Details.</b></h3>
            </div>
            <div style="border:1px solid #c0c0c0; margin-left: 15%; width: 70%; border-radius: 10px 10px; height:150px">
                <div class="row" style="margin-top: 5%">
                    <form class="" method="post" action="staff" role="form" style="margin-top: -2.5%;margin-left: 5%">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-sm-6" style="" id="" >
                            <div class="" style="margin-left: 5%">
                                <label class="" for="">Mobile No:</label>
                                <div class="row" style="">
                                    <div class="form-group col-sm-9">
                                        <input type="text" style="" name="mobile" id="mobile" class="form-control" required="required" placeholder="Mobile No">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <div class="form-group">
                                            <center><button style="margin-left: -40%" type="submit" class="btn btn-primary "><b>Search</b></button></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="" method="post" action="staff" role="form" style="margin-top: -2.5%;margin-left: 5%">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-sm-6" style="" id="" >
                            <div class="" style="margin-left: -3%">
                                <label class="" for="">Email Address:</label>
                                <div class="row" style="">
                                    <div class="form-group col-sm-9">
                                        <input type="text" style="" name="email" id="email" class="form-control" required="required" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <div class="form-group">
                                            <center><button style="margin-left: -40%" type="submit" class="btn btn-primary "><b>Search</b></button></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br/>
            @if(isset($customer))
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
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
                                @if($customer->count() > 0)
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
                                        </tr>
                                    @endforeach
                                @else
                                    <tr><th colspan="8">No Match Found</th></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div><!--/.container-->
</section><!--/#services-->

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
<script src="js/main.js"></script>
{{--<script src="js/custom/default.js"></script>--}}
</body>
</html>