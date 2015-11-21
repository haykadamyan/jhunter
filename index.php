<?php

    if(isset($_POST['submit_question'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $question = $_POST['question'];

        $to = "drprog00@gmail.com";
        $subject = "New question";
        $txt = "Hello world!";
        $headers = "From: customer@thejhunter.com";

        mail($to,$subject,$txt,$headers);

        echo $name . " " . $phone . " " . $question;
    }




?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

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

    <div id="online-order" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Կապնվել օպերատորի հետ հենց հիմա</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="text" name="name" class="form-control" placeholder="Անուն"><br>
                        <input type="text" name="phone" class="form-control" placeholder="Հեռախոսահամար"><br>
                        <textarea class="form-control" style="resize: vertical; min-height: 130px" name="question" placeholder="Ինչո՞վ կարող ենք Ձեզ օգնել"></textarea>
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
        <div class="container-fluid">
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
                        <a class="page-scroll" href="#portfolio">Օպերատորներ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Հետադարձ կապ</a>
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
                <p>Վիրտուալ քարտուղար որը կօգնի Ձեզ Ձեր առօրյա մանր խնդիրներում</p>
                <a href="javascript:void()" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#online-order">Ավելի մանրամասն</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Մենք կլուծենք Ձեր առօրյա խնդիրները</h2>
                    <hr class="light">
                    <p class="text-justify">Մեր ծառայության շնորհիվ Դուք կունենաք վիրտուալ քարտուղար: Նրան Դուք կարող եք վստահել Ձեր ամենակարևոր և հրատապ գործերի իրականացումը` անկախ Ձեր գտնվելու վայրից: Պարզապես զանգահարեք եւ ստացեք Ձեզ հետաքրքրող, նախապես ճշտված տեղեկատվություն ամենատարբեր բնագավառներից` սկսած սպասարկման ոլորտից մինչև պետական մարմիններ: Տեղեկատվություն ոչ միայն հասցեի կամ հեռախոսահամարի տեսքով, այլ նաև գործունեության, պայմանների ու ցանկացած այլ մանրամասների: Ինչպես նաեւ մեր միջոցով Դուք կարող եք օգտվել հանրապետությունում գործող տարբեր ծառայություններից խնայելով Ձեր ժամանակը։</p>
                    <!--<a href="#" class="btn btn-default btn-xl">Get Started!</a>-->
                    <strong class="h1">(094) 35 12 32</strong>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
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
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-phone wow bounceIn text-primary"></i>
                        <h3>Զանգահարեք</h3>
                        <p class="text-muted">Մեր օպերատորները միշտ տեղում են եւ պատրաստ են Ձեզ օգնել ցանկացաց հարցում։</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-comments-o wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Բացատրեք Ձեր խնդիրը</h3>
                        <p class="text-muted">Պատասխանեք մի քանի պարզագույն հարցի մեր օպերատորի կողմից։</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-clock-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Սպասեք</h3>
                        <p class="text-muted">Սպասեք 2-ից 3 րոպե քանի դեռ մեր օպերատորը կփնտրի Ձեր հարցի պատասխանը։</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-phone wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Ստացեք Ձեր հարցի պատասխանը</h3>
                        <p class="text-muted">Ստացեք հետ զանգ որը կպտասխանի Ձեր հարցին։</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Օպերատորներ</h2>
                    <hr class="primary">
                </div>
            </div>
            <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6 assistant">
                        <img src="img/assistants/1.jpg" class="img-responsive assistant-picture" alt="">
                        <span class="assistant-text assistant-name h3">Լուսինե Ալեքսանյան</span>
                        <strong class="assistant-text">Լուսինեն պատասխանել է 497 հարցի</strong>
                        <div class="stars">
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star-half-o custom-star"></span>
                        </div>
                        <a href="#" class="btn btn-warning">Կապնվել Լուսինեի հետ</a>
                    </div>

                    <div class="col-lg-4 col-sm-6 assistant">
                        <img src="img/assistants/2.jpg" class="img-responsive assistant-picture" alt="">
                        <span class="assistant-text assistant-name h3">Կարեն Մամիկոնյան</span>
                        <strong class="assistant-text">Կարենը պատասխանել է 638 հարցի</strong>
                        <div class="stars">
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star-o custom-star"></span>
                        </div>
                        <a href="#" class="btn btn-warning">Կապնվել Կարենի հետ</a>
                    </div>

                    <div class="col-lg-4 col-sm-6 assistant">
                        <img src="img/assistants/3.jpg" class="img-responsive assistant-picture" alt="">
                        <span class="assistant-text assistant-name h3">Մարիամ Ավետիսյան</span>
                        <strong class="assistant-text">Մարիամը պատասխանել է 328 հարցի</strong>
                        <div class="stars">
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                            <span class="fa fa-star custom-star"></span>
                        </div>
                        <a href="#" class="btn btn-warning">Կապնվել Մարիամի հետ</a>
                    </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Այլեւս մի վատնեք  Ձեր ժամանկը, ԶԱՆԳԱՀԱՐԵ'Ք</h2>
                <!--<a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>-->
                <strong class="h1 wow tada">(094) 35 12 32</strong>
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

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
