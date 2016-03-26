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
    <div id='cssmenu' style="margin-left: 0%;width:100%; height:80px">
        <ul style="margin-top: 1%;">
            <li><a href='/staff'><b style=""><b style="">Reservation</b></b></a></li>
            <li class='active'><a href='/upload'><b>Upload</b></a></li>
            <li><a href='/availability'><b>Availability</b></a></li>
            <li><a href='/checking'><b>Checking</b></a></li>
            <li><a href='/edit_detail'><b>Edit Detail</b></a></li>
            <li class="pull-right"><a href='/auth/logout'><b>Logout</b></a></li>
        </ul>
    </div>
</header><!--/#header-->

<section id="services" STYLE="margin-top: 100px">

    <div class="container">
        <div class="box first" STYLE="margin-top:2%"><br/>

            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li><a href="/upload" data-toggle="">Room Images.</a></li>
                    <li class="active"><a href="/upload_gallery" data-toggle="">Gallery Images.</a></li>
                </ul><br/><hr style="margin-left:13%; width: 73%;"/>

                <div class="tab-content">

                    <div class="tab-pane active" id="tab2">
                        <div style="border:2px solid #c0c0c0; margin-left: 5%; width: 90%; border-radius: 10px 10px;">
                            <div class="center gap">
                                <h4>Gallery Images.</h4><hr style="margin-left: 20%; width:60%;"/>
                                welcome <b>{{Auth::user()->fullName()}}</b>
                            </div>
                            <!-- start: FLASH MESSAGE -->
                            @if(Session::has('flash_message'))
                                {!! Session::get('flash_message') !!}
                            @endif
                            @include('errors.errors')
                            <div class="row" style="margin-top: 5%">
                                <form enctype="multipart/form-data" class="" method="post" action="galleryUpload" role="form" style="margin-top: -2.5%;margin-left: 2%">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-sm-6" style="height: 200px;" id="" >
                                        <div class="" style="margin-left: 10%; width:80%; height: 200px; border: 2px solid #c0c0c0;">
                                            <img id="img_prev2" style="height: 100%;width:100%;" src="uploads/avatar.png" alt="passport">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-left: 0%;">
                                        <div class="row" style="height: 70px; margin-left: 8%">
                                            <div class="">
                                                <label class="" for="">Image:</label>
                                                <div class="form-group">
                                                    <input type="file" name="img" id="img" onchange="readURL2(this);"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="height: 70px; margin-left: 8%">
                                            <div class="">
                                                <label class="" for="">Image Name:</label>
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" style="width:70%" class="form-control" required="required" placeholder="Image Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="height: 120px; margin-left: 8%">
                                            <div class="" style="">
                                                <label class="" for="">Image Description:</label>
                                                <div class="form-group" style="">
                                        <textarea name="description" id="description" style="width:70%" class="form-control" required="required" placeholder="Image Description">
                                        </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="height: 60px; margin-left: 8%">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <button style="margin-left: 0%;width:70%" id ="upload_gal" style="margin-left: -40%" type="submit" class="btn btn-primary "><b>Upload</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><br/>
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