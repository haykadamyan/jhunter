<?php

include "./includes/db_connect.php";
global $con;

echo "<pre>";
print_r($_SERVER);die;

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
    <link href="css/creative.css" rel="stylesheet">
    <!-- On Scroll Animations -->

    <!-- Google Fonts -->

</head>
<body id="blog">


<div id="wt_breadcrumbs">
    <div id="wt_breadcrumbs_wrapp" data-color="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs">
                        <a href="http://localhost/blog" rel="home" class="breadcrumbs-begin">Home</a>
                        <span class="breadcrumbs-separator">/</span>
                        Blog
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container body-container">

    <?php

    $id = $_GET['post_id'];

    $query = "SELECT * FROM `post` WHERE id='$id'";

    $send_query = mysqli_query($con, $query);

    while($res = mysqli_fetch_assoc($send_query)){
        ?>

        <div class="row">
            <div class="col-md-12 post">
                <img src="<?=$res['img']?>" alt="">
                <h3 class="post-heading"><?=$res['title']?></h3>
                <div class="post-content">
                    <?=$res['content']?>
                </div>
            </div>
        </div>

        <?php
    }


    ?>


</div>

</body>
</html>




















