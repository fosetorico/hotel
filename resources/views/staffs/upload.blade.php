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

<body>
<header id="header" role="">
    <div style="background-color: white;width:100%">
        <img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 90px; width: 40%">
    </div>
    <div id='cssmenu' style="margin-left: 5%;width:90%; height:80px">
        <ul style="margin-top: 1%;">
            <li><a href='/staff'><b style="">Check Reservation</b></a></li>
            <li class='active'><a href='/upload'><b>Upload Images</b></a></li>
            <li><a href='/availability'><b>Availability</b></a></li>
            <li><a href='/checking'><b>Checking</b></a></li>
            <li><a href='/edit_detail'><b>Edit Details</b></a></li>
            <li class="pull-right"><a href='/auth/logout'><i class=" icon-off"></i>&nbsp;<b>Logout</b></a></li>
        </ul>
    </div>
</header><!--/#header-->

<section id="services" STYLE="margin-top: 100px">

    <div class="container">
        <div class="box first" STYLE="margin-top:2%"><br/>

            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="/upload" data-toggle="">Room Images.</a></li>
                    <li><a href="/upload_gallery" data-toggle="">Gallery Images.</a></li>
                </ul><br/><hr style="margin-left:13%; width: 73%;"/>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div style="border:2px solid #c0c0c0; margin-left: 15%; width: 70%; border-radius: 10px 10px;">
                            <div class="center gap">
                                <h4>Rooms Images.</h4><hr style="margin-left: 20%; width:60%;"/>
                                welcome {{Auth::user()->fullName()}}
                            </div>
                            <!-- start: FLASH MESSAGE -->
                            @if(Session::has('flash_message'))
                                {!! Session::get('flash_message') !!}
                            @endif
                            <div class="row" style="margin-top: 5%">
                                @include('errors.errors')
                                <form class="" enctype="multipart/form-data" method="post" action="/upload" role="form" style="margin-top: -2.5%;margin-left: 2%">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-sm-6" style="height: 70px;" id="" >
                                        <div class="" style="margin-left: 10%; width:80%; height: 200px; border: 2px solid #c0c0c0;">
                                            <img id="img_prev" style="height: 100%;width:100%;" src="uploads/avatar.png" alt="passport">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-left: 0%;" id="" >
                                        <div class="row" style="height: 70px">
                                            <div class="">
                                                <label class="" for="">Image:</label>
                                                <div class="form-group">
                                                    <input type="file" name="image" id="image" onchange="readURL(this);"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="height: 70px">
                                            <div class="">
                                                <label class="" for="">Image Name:</label>
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" style="width:70%" class="form-control" required="required" placeholder="Image Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="height: 80px">
                                            <div class="">
                                                <label class="" for="">Image Room Cartegory:</label>
                                                <div class="form-group">
                                                    <select class="form-control" required="required" style="width:70%" name="cart_id" id="cart_id">
                                                        <option value="">Select room</option>
                                                        @foreach($cart as $car)
                                                            <option value="{{$car->id}}">{{$car->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="height: 60px">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <button style="margin-left: 0%;width:70%" id ="upload_room" style="margin-left: -40%" type="submit" class="btn btn-primary "><b>Upload</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br/>
                                </form><br/>
                            </div><br/>
                        </div><br/>
                    </div>
                        </div><br/><br/><br/><br/>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section><!--/#main-slider-->

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
<script src="js/main.js"></script>
<script src="js/custom/default.js"></script>
</body>
</html>