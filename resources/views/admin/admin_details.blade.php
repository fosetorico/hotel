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

<body data-spy="scroll" data-target="" data-offset="">
<header id="header" role="">
    <div style="background-color: white;width:100%">
        <img src="uploads/logo.jpg" alt="" style="margin-left: 25%;height: 90px; width: 40%">
    </div>
    <div id='cssmenu' style="margin-left: 0%;width:100%; height:80px">
        <ul style="margin-top: 1%;">
            <li><a href='/register'><b style="">Register Staff</b></a></li>
            <li class='active'><a href='/view_staff'><b>View Details</b></a></li>
            <li><a href='/block'><b>Block & Unblock</b></a></li>
            <li><a href='/edit_staff'><b>Edit Records</b></a></li>
            <li class="pull-right"><a href='/auth/logout'><b>Logout</b></a></li>
            <!--li><a href='/billing'><b>Edit Billings</b></a></li-->
        </ul>
    </div>
</header><!--/#header-->
<section id="" class="" style="height:120px">

</section><!--/#main-slider-->

<section id="services" STYLE="">
    <div class="container">
        <div class="box first" STYLE="margin-top:2%">
            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li><a href="/view_staff" data-toggle="">Staff.</a></li>
                    <li class="active"><a href="/view_admin" data-toggle="">Admin.</a></li>
                </ul><br/><hr style="margin-left:13%; width: 73%;"/>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div style="border:2px solid #c0c0c0; margin-left: 15%; width: 70%; border-radius: 10px 10px;">
                            <div class="center gap">
                                <h4>View Admin Details.</h4><hr style="margin-left: 20%; width:60%;"/>
                                welcome {{Auth::user()->fullName()}}
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <table class="table table-bordered table-striped table-hover table-responsive">
                                        <tbody>
                                            <tr>
                                                <td rowspan="4">
                                                    <img src="{{Auth::user()->fullPath()}}" style="margin-left:20%;width:60%;height: 200px">
                                                </td>
                                                <td>Surname:</td>
                                                <td>{{Auth::user()->surname}}</td>
                                            </tr>
                                            <tr>
                                                <td>Last Name:</td>
                                                <td>{{Auth::user()->lastname}}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile:</td>
                                                <td>{{Auth::user()->mobile}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>{{Auth::user()->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td colspan="2">{{Auth::user()->address}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br/>
                </div>
            </div><br/><br/><br/><br/>
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
<script src="js/main.js"></script>
{{--<script src="js/custom/default.js"></script>--}}
</body>
</html>