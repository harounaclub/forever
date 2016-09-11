<!DOCTYPE html>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Ecole Média</title>
    <!--favicon-->
    <link href="<?php echo base_url() ?>assets/images/favicon.png" rel="shortcut icon" />
    <!--Les styles-->
    <link href="<?php echo base_url() ?>assets/css/style.css" media="screen" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/responsive.css" media="screen" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/montserrat/montserrat.css" media="screen" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animation.css" />
    <!--Les styles des js-->
    <link href="<?php echo base_url() ?>assets/css/modern-ticker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/jquery.mCustomScrollbar.css" media="screen" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/owlcarousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/jquery.dataTables.css" rel="stylesheet">
    <!--Les js first-->

    <script charset="utf-8" src="<?php echo base_url() ?>assets/js/modernizr.js" type="text/javascript"></script>

</head>

<body onload="UR_Start()">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6&appId=220779081335178";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="bar-info">
    <div class="container">
        <div class="zone-title">
            Flash info
        </div>
        <div class="ticker4 modern-ticker  mt-scroll">

            <div class="mt-news">
                <ul>
                    <?php  foreach($flashs as $row ){ ?>
                    <li><a href="#"><?php  echo strtoupper($row->flash_titre) ?> : <?php  echo $row->flash_contenu ?></a></li>
                    <?php  } ?>
<!--                    <li><a href="#"> 2è FORUM MINISTERIEL AFRICAIN SUR L'INTEGRATION DES TIC DANS L'EDUCATION ET LA FORMATION</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="container">
    <div id="wrapp">
        <header id="header">
            <div id="header-links">
                <div class="container">
                    <div class="one">
                        <div class="one-half">
                            <!-- recherche -->
                            <nav class="top-search">
                                <!-- search starts-->
                                <form action="#" method="get">
                                    <button class="search-btn"></button>
                                    <input class="search-field" type="text" onblur="if(this.value=='')this.value='Recherche';" onfocus="if(this.value=='Recherche')this.value='';" value="Recherche">
                                </form>
                            </nav>
                        </div>
                        <div class="one-half">
                            <ul class="header-links">
                                <!-- header links starts-->
                                <li><a href="#">A propos </a></li>
                                <li><a href="#">Contact</a></li>
                                <li class="pays"><a href="#" class="flag"><img src="<?php echo base_url() ?>assets/images/carte-ci.jpg">Côte d'Ivoire</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="head-wrapp">
                <div class="container">

                    <div class="one">
                        <div class="head-img"><img src="<?php echo base_url() ?>assets/images/head-img.png"></div>
                        <div class="one-fourth">
                            <a href="./">
                                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="three-fourth">
                            <div class="connexion">
                                <a href="#"> <div class="round-pic"> <i class="fa fa-user"></i> </div> <div class="text">Espace<br>Membre</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-navigation">
                <!--main navigation wrapper starts -->
                <div class="container">
                    <ul class="main-menu">
                        <li><a href="<?php echo base_url() ?>accueil" <?php if(strpos(current_url(), "accueil")||(current_url() == base_url())){echo"id='current'";} ?>>Accueil</a></li>
                        <li><a href="<?php echo base_url() ?>actualite" <?php if(strpos(current_url(), "actualite")){echo"id='current'";} ?> >Actualité</a></li>
                        <li><a href="<?php echo base_url() ?>tableau_honneur" <?php if(strpos(current_url(), "tableau_honneur")){echo"id='current'";} ?><?php echo base_url() ?>actualite" <?php if(strpos(current_url(), "Tableaux d'honneur")){echo"id='current'";} ?> >Tableaux d'honneur</a></li>
                        <li><a href="<?php echo base_url() ?>librairie" <?php if(strpos(current_url(), "librairie")){echo"id='current'";} ?> >Librairie</a></li>
                        <li><a href="<?php echo base_url() ?>bibliotheque" <?php if(strpos(current_url(), "bibliotheque")){echo"id='current'";} ?> >Bibliotheque</a></li>
                        <li><a href="<?php echo base_url() ?>quizz" <?php if(strpos(current_url(), "quizz")){echo"id='current'";} ?> >Quizz</a></li>

                        <li><a href="<?php echo base_url() ?>mediatheque" <?php if(strpos(current_url(), "mediatheque")){echo"id='current'";} ?> >Mediathèque</a></li>
                        <li><a href="<?php echo base_url() ?>souscription" <?php if(strpos(current_url(), "souscription")){echo"id='current'";} ?> >Souscription</a></li>

                    </ul>
                    <div class="after-nav-info">
                        <h4><span class="horloge "><i class="fa fa-calendar"></i>
                                <?php
                                setlocale(LC_TIME, 'fra_fra');
                                // setlocale(LC_TIME, 'fr_FR.UTF8');
                                // setlocale(LC_TIME, 'fr_FR');
                                // setlocale(LC_TIME, 'fr');
                                echo strftime('%d/%m/%y');
                                ?></span>  | <i class="fa fa-clock-o"></i> <span id="ur"></span></h4>
                    </div>
                </div>
            </div>
        </header>
    </div>
