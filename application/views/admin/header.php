<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Ecole Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN PLUGIN CSS -->

      <link href="<?php echo base_url() ?>assets/admin/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<!--    <link href="--><?php //echo base_url() ?><!--assets/admin/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>-->
    <!-- END PLUGIN CSS -->

    <!-- BEGIN CORE CSS FRAMEWsORK -->

    <link href="<?php echo base_url() ?>assets/admin/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!--    <link href="--><?php //echo base_url() ?><!--assets/admin/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="<?php echo base_url() ?>assets/admin/plugins/font-awesome-4.6.1/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

    <!-- END CORE CSS FRAMEWORK -->

    <link href="<?php echo base_url() ?>assets/admin/css/toastr.css" rel="stylesheet" type="text/css"/>
    <!-- BEGIN CSS TEMPLATE -->

    <link href="<?php echo base_url() ?>assets/admin/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- END CSS TEMPLATE -->
    <script src="<?php echo base_url() ?>assets/admin/tinymce/tinymce.min.js" type="text/javascript"></script>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
                <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="index.html"><img src="<?php echo base_url() ?>assets/admin/img/logo.png" class="logo" alt=""  data-src="<?php echo base_url() ?>assets/admin/img/logo.png" data-src-retina="assets/img/logo2x.png" width="130" height=""/></a>
            <!-- END LOGO -->

        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav" >
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
                            <i class="fa fa-reorder"></i>
                        </a> </li>
                </ul>
                <ul class="nav quick-section">


                    <li class="quicklinks"> <a href="#" class="" >
                            <i class="fa fa-book"></i>
                        </a> </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on"> <i class="fa fa-search"></i></span>
                        <input name="" type="text"  class="no-boarder " placeholder="Faire une recherche" style="width:250px;">
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler">
                    <a href="#" class="dropdown-toggle">
                        <div class="user-details">
                            <div class="username">
                                <?php echo $this->session->userdata('utilisateur_prenoms')?> <span class="bold"><?php echo $this->session->userdata('utilisateur_nom')?></span>
                            </div>
                        </div>

                    </a>

                    <div class="profile-pic">
                        <img src="<?php echo base_url() ?>assets/admin/img/profiles/avatar_small.jpg"  alt="" data-src="<?php echo base_url() ?>assets/admin/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <i class="fa fa-gear fa-spin"> </i>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="#"> Profil</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url()?>utilisateur/login/logout">Deconnexion</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->

    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>

<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar" id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
<!--        <div class="user-info-wrapper">-->
<!--            <div class="profile-wrapper">-->
<!--                <img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />-->
<!--            </div>-->
<!--            <div class="user-info">-->
<!--                <div class="greeting">Bienvenue</div>-->
<!--                <div class="username">Sahiry N'guessan <span class="bold">Fabrys-christian</span></div>-->
<!--                <div class="status">Status<a href="#"><div class="status-icon green"></div>En ligne</a></div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- END MINI-PROFILE -->

        <!-- BEGIN SIDEBAR MENU -->

        <ul>

            <li > <a href="<?php echo base_url() ?>utilisateur"> <i class="fa fa-user"></i> <span class="title">Utilisateurs</span>  </a>

            </li>
            <li > <a href="javascript:"> <i class="fa fa-newspaper-o"></i> <span class="title">Actualites</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li > <a href="<?php echo base_url() ?>administration/actualite">Liste Actualites</a> </li>
                    <li > <a href="<?php echo base_url() ?>administration/actualite/add">Ajout Actualite</a> </li>
                </ul>
            </li><li > <a href="javascript:"> <i class="fa fa-newspaper-o"></i> <span class="title">Medias</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li > <a href="<?php echo base_url() ?>administration/media/category">Albums</a> </li>
                    <li > <a href="<?php echo base_url() ?>administration/media">Liste des medias</a> </li>
                </ul>
            </li>
            <li class=""> <a href="<?php echo base_url() ?>administration/video"> <i class="fa fa-video-camera"></i> <span class="title">Video</span>  </a>

            </li>
            <li class=""> <a href="<?php echo base_url() ?>administration/flash"> <i class="fa fa-flash"></i> <span class="title">Flash News</span>  </a>

            </li>
            <li > <a href="<?php echo base_url() ?>administration/client"> <i class="fa fa-book"></i> <span class="title">Clients</span>  </a>

            </li>
            <li > <a href="javascript:"> <i class="fa fa-book"></i> <span class="title">Publicites</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li > <a href="<?php echo base_url() ?>publicite/position">Position</a> </li>
                    <li > <a href="<?php echo base_url() ?>publicite">Ajout Publicite</a> </li>
                </ul>
            </li>
            <li > <a href="javascript:"> <i class="fa fa-book"></i> <span class="title">Librairies</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li > <a href="<?php echo base_url() ?>administration/librairie">Liste librairie</a> </li>
                    <li > <a href="<?php echo base_url() ?>administration/librairie/add">Ajout librairie</a> </li>
                </ul>
            </li>



        </ul>

        <a href="#" class="scrollup">Scroll</a>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>

    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE CONTAINER-->

    <div class="page-content">
        <div class="header-school-name">
            <div class="school-name">

            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <div class="content">

