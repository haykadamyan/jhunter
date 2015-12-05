<?php

    include "./includes/db_connect.php";
    global $con;




?>


<!DOCTYPE html>
<!-- Crossway - Startup Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="am"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="am"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="am"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="am"> <!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>Crossway - Startup Landing Page Template</title>
    <meta name="keywords" content="responsive, html5 template, one page, landing, startup, business, company, corporate, creative">
    <meta name="description" content="Crossway - Startup Landing Page Template">
    <meta charset="utf-8">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Libs CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">


    <!-- Template CSS -->

    <!-- Responsive CSS -->

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

</head>

<body class="blog">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=522813747820319";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">jHunter</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Նորություններ
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php">Մասնակցիր եւ շահիր iPhone 6s</a>
                </h2>
                <p><span class="glyphicon glyphicon-time"></span> 5.12.2015</p>
                <hr>
                <img class="img-responsive" style="width: 200px; float: left; margin-right: 10px;" src="img/iphone.png" alt="">
                <p>Ամանօրյա տոներին ընդառաջ, jHunter-ը ներկայանում է բում առաջարկով։ Մինչեւ դեկտեմբերի 25-ը <a href="http://thejhunter.com">www.thejhunter.com</a> անհատական վիրտուալ քարտուղարի միջոցով 10 եւ ավելի հարցում ուղարկած հաճախորդները հնարավորություն կունենան մասնակցել նոր iPhone 6s-ի խաղարկության...</p>
                <a class="btn btn-warning" href="post.php?post_id=1">Կարդալ ավելին<span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr style="clear: both; position:relative; top: 20px;">
                <!-- Pager -->
                <ul class="pager" style="margin-top: 50px;">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Միացեք մեզ facebook-ում</h4>
                    <p>
                    <div class="fb-page" data-href="https://www.facebook.com/yourhelptoday" data-width="500" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/yourhelptoday"><a href="https://www.facebook.com/yourhelptoday">JHunter-անհատական վիրտուալ քարտուղար</a></blockquote></div></div>                    </p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy jHunter բոլոր իրավունքները պաշտպանված են։</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <script type="js/jquery.js"></script>
    <script type="js/bootstrap.js"></script>
</body>
</html>