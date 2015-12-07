<?php

    if(isset($_POST['submit_question'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $question = $_POST['question'];

        $to = "drprog00@gmail.com";
        $subject = "New question";
        $txt = "Անուն - " . $name . "<br>Հեռախոսահամար - " . $phone . "<br>Հարց - " . $question;
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers.= "From: customer@thejhunter.com" . "\r\n";
        $header.= "Cc: artashes.vardanyan@gmail.com";

        if(mail($to,$subject,$txt,$headers)){
            echo "<script>window.onload=function(){
            $.notify('Ձեր հարցումը կատարված է, մենք Ձեզ կզանգահարենք մի քանի րոպեի ընդացկում:',{position:'top-left', className:'success'});
            }</script>";
        }

    }




?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="jHunter-Անհատական վիրտուալ քարտուղար զբաղված մարդկանց համար որոնց ժամանակը ավելի քիչ է քան առօրյա անելիքները">
    <meta name="keywords" content="jhunter, jHunter, JHUNTER, քարտուղար, օպերատոր, օգնական, անձնական օգնական, անձնական քարտուղար, անհատական օգնական, անհատական քարտուղար, վիրտուալ քարտուղար, վիրտուալ օգնական, Ձեր անձնական օգնականը, Ձեր անձնական քարտուղարը, andznakan qartughar, secretary">

    <title>jHunter-Վիրտուալ քարտուղար Քեզ համար</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <div id="bonus" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Բում խաղարկություն</h4>
                </div>
                <div class="modal-body">
                    <img src="img/iphone.png" style="width: 128px;float: left;margin-right: 22px;">Ամանօրյա տոներին ընդառաջ, jHunter-ը ներկայանում է բում առաջարկով։ Մինչեւ դեկտեմբերի 25-ը 10 եւ ավելի հարցում ուղարկած հաճախորդները հնարավորություն կունենան մասնակցել լրիվ նոր <strong>iPhone 6s</strong>-ի խաղարկությանը։
                    <div class="text-right" style="padding-top: 20px">
                        <span style="clear:both; display: block; visibility: hidden"></span>
                        <a href="#portfolio" type="button" class="btn btn-info page-scroll" data-dismiss="modal">Կապնվիր քո անձնական քարտուղարին</a>
                    </div>
                </div>
                <!--                <div class="modal-footer">-->
                <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--                </div>-->
            </div>

        </div>
    </div>

    <div id="online-order" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Կապնվեք Ձեր անձնական քարտուղարի հետ հենց հիմա</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="text" required name="name" class="form-control" placeholder="Անուն"><br>
                        <input type="text" required name="phone" class="form-control" placeholder="Հեռախոսահամար"><br>
                        <textarea class="form-control" required style="resize: vertical; min-height: 130px; max-height: 300px;" name="question" placeholder="Ողջույն ինչո՞վ կարող եմ Ձեզ օգնել"></textarea>
                        <div class="text-right" style="padding-top: 20px">
                            <button type="submit" name="submit_question" class="btn btn-warning">Ուղարկել</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">Փակել</button>
                        </div>
                    </form>
                </div>
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                </div>-->
            </div>

        </div>
    </div>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">jHunter</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Մեր մասին</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Ինչպե՞ս է այն աշխատում</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio" style="background-color: white; color: #F05F40;">Կապնվեք Ձեր անձնական քարտուղարին հենց հիմա</a>
                    </li>
                    <li>
                        <a class="page-scroll" target="_blank" href="blog.php">Նորություններ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>jHunter</h1>
                <hr>
                <p class="slider-text"><span>Անհատական վիրտուալ քարտուղար զբաղված մարդկանց համար որոնց ժամանակը ավելի քիչ է քան առօրյա անելիքները</span><span>Ամրագրե'ք հյուրանոցներ, պատվիրե'ք կինոթատրոնի եւ համերգների տոմսեր, եւ այլն։</span> <span>Գտե'ք համապատասխան վարպետին<br> Ձեր տնային խնդիրների լուծման համար։</span><span>Պայմանավորվե'ք Ձեր այցելության ժամերը ատամնաբուժարանների, գեղեցկության սրահների<br> եւ այլ հաստատությունների հետ:</span></p>
                <a href="#portfolio" class="btn btn-primary btn-xl page-scroll wow tada" style="position: relative;top:10px;">Կապնվեք Ձեր անձնական քարտուղարի հետ</a>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Մենք կլուծենք Ձեր առօրյա խնդիրները</h2>
                    <hr class="light">
                    <p class="text-justify">Ձեր առօրյա փոքր բայց ժամանակատար անելիքները պետք է կատարվեն, բայց ոչ պարտադիր հենց Ձեր կողմից։ Մեր վիրտուալ քարտուղարները կօգնեն Ձեզ իրականացնել առօրյա փոքր անելիքները, որպեսզի դուք ավելի շատ կենտրոնանաք կարևոր անելիքների վրա, մինչ մենք կզբաղվենք մնացածով։</p>
                    <!--<a href="#" class="btn btn-default btn-xl">Get Started!</a>-->
                    <strong class="h1">(094) 35 12 32</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ինչպե՞ս է համակարգը աշխատում</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-laptop wow bounceIn text-primary"></i>
                        <h3>Կապնվեք Ձեր անձնական քարտուղարի հետ</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-comments-o wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Բացատրեք Ձեր խնդիրը</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-thumbs-o-up wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Ձեր խնդիրը լուծված է</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite">Կապնվեք Ձեր անձնական քարտուղարի հետ</h2>
                    <hr class="primary">
                </div>
            </div>
            <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6 assistant">
                        <div class="assistant-info">
                            <img src="img/assistants/1.jpg" class="img-responsive assistant-picture" alt="">
                            <div class="stars text-center">
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star-half-o custom-star"></span>
                            </div>
                        </div>
                        <span class="assistant-text assistant-name h3">Լուսինե</span>
                        <strong class="assistant-text">Ես Ձեզ կօգնեմ ամրագրել՝ հյուրանոցներ, պատվիրել կինոթատրոնի եւ համերգների տոմսեր, եւ այլն։ Ինձնից արդեն գոհ է 497 հաճախորդ։</strong>
                        <a href="javascript:void()"  data-toggle="modal" data-target="#online-order" class="btn btn-warning wow tada">Կապնվել Լուսինեի հետ</a>
                    </div>

                    <div class="col-lg-4 col-sm-6 assistant">
                        <div class="assistant-info">
                            <img src="img/assistants/2.jpg" class="img-responsive assistant-picture" alt="">
                            <div class="stars text-center">
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star-half-o custom-star"></span>
                            </div>
                        </div>
                        <span class="assistant-text assistant-name h3">Կարեն</span>
                        <strong class="assistant-text">Ես Ձեզ կօգնեմ գտնել համապատասխան վարպետին Ձեր տնային խնդիրների լուծման համար։ Ինձնից գոհ է 693 հաճախորդ։</strong>

                        <a href="javascript:void()" data-wow-delay="1s" data-toggle="modal" data-target="#online-order" class="btn btn-warning wow tada">Կապնվել Կարենի հետ</a>
                    </div>

                    <div class="col-lg-4 col-sm-6 assistant">
                        <div class="assistant-info">
                            <img src="img/assistants/3.jpg" class="img-responsive assistant-picture" alt="">
                            <div class="stars text-center">
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                                <span class="fa fa-star custom-star"></span>
                            </div>
                        </div>
                        <span class="assistant-text assistant-name h3">Մարիամ</span>
                        <strong class="assistant-text">Ես կպայմանավորվեմ Ձեր այցելության ժամերը ատամնաբուժարանների, գեղեցկության սրահների եւ այլ հաստատությունների հետ։</strong>
                        <a href="javascript:void()" data-wow-delay="2s" data-toggle="modal" data-target="#online-order" class="btn btn-warning wow tada">Կապնվել Մարիամի հետ</a>
                    </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Այլեւս մի վատնեք  Ձեր ժամանկը, ԶԱՆԳԱՀԱՐԵ'Ք</h2>
                <!--<a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>-->
                <strong class="h1 wow bounceInUp">(094) 35 12 32</strong>
            </div>
        </div>
    </aside>

    <!--<section id="contact">-->
        <!--<div class="container">-->
            <!--<div class="row">-->
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">-->
                    <!--<h2 class="section-heading">Let's Get In Touch!</h2>-->
                    <!--<hr class="primary">-->
                    <!--<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-lg-offset-2 text-center">-->
                    <!--<i class="fa fa-phone fa-3x wow bounceIn"></i>-->
                    <!--<p>123-456-6789</p>-->
                <!--</div>-->
                <!--<div class="col-lg-4 text-center">-->
                    <!--<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>-->
                    <!--<p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</section>-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/notify.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script>
        $(document).ready(function(){
            $("#bonus").modal("show");
        });

    </script>

</body>

</html>
