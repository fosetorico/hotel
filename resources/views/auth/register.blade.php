<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="SHORTCUT ICON" href="uploads/icon.jpg" TYPE="image/jpg"/>
    <title>Newland Hotels and Suites.</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
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
            <li class='active'><a href='/register'><b style="">Register Staff</b></a></li>
            <li><a href='/view_staff'><b>View Details</b></a></li>
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
        <div class="box first" STYLE="margin-top:1%">
            <div class="center gap">
                <h3><b>Register Staff.</b></h3>
                welcome <b>{{Auth::user()->fullName()}}</b>
            </div>
            <!-- start: FLASH MESSAGE -->
            @if(Session::has('flash_message'))
                {!! Session::get('flash_message') !!}
            @endif
            @include('errors.errors')
            <div style="border:1px solid #c0c0c0; margin-left: 5%; width: 90%; border-radius: 10px 10px;">
                <form enctype="multipart/form-data" method="POST" action="/auth/register" role="form" style="margin-top: 2%;margin-left: 10%;width: 80%">
                    {!! csrf_field() !!}
                    <div class="row" style="">
                        <div class="col-sm-10" style="" id="" >
                                <div class="" style="margin-left: 45%; width:35%; height: 200px; border: 2px solid #c0c0c0;">
                                    <img id="img_prev" style="height: 100%;width:100%;" src="uploads/blank2.gif" alt="passport"><br><br>
                                    <input type="file" name="photo" id="photo" onchange="readURL(this);"/>
                                </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6" style="" id="" >
                            <div class="">
                                <label class="" for="">Email:</label>
                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required="required" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="" id="" >
                            <div class="">
                                <label class="" for="">Password:</label>
                                <div class="form-group">
                                    <input type="password" name="password" required="required" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6" style="" id="" >
                            <div class="">
                                <label class="" for="">Surname:</label>
                                <div class="form-group">
                                    <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" required="required" placeholder="Surname">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="" id="" >
                            <div class="">
                                <label class="" for="">Last Name:</label>
                                <div class="form-group">
                                    <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" required="required" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6" style="" id="" >
                            <div class="">
                                <label class="" for="">Mobile Number:</label>
                                <div class="form-group">
                                    <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" required="required" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="" id="" >
                            <label class="" for="">Address:</label>
                            <div class="form-group">
                                <textarea name="address" class="form-control" placeholder="Address">{{ old('address') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-8 col-lg-offset-2" style="" id="" >
                            <div class="form-group">
                                <label class="" for="">Confirm Password:</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="required" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <center><button id="submitForm" style="width: 80%" type="submit" class="btn btn-primary "><b>Register</b></button></center>
                    </div><br/>
                </form>
            </div><br/><br/><br/>
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
                <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"><b>Newlnd Hotels and Suites</b></a>. All Rights Reserved.
            </div>
            <!--div class="col-sm-6">
                <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
            </div-->
        </div>
    </div>
</footer><!--/#footer-->

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.isotope.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>
<script src="js/custom/default.js"></script>
</body>
</html>