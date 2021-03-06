<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <!-- Title -->
        <title>Alpha | </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/materialize/css/materialize.min.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">        
        <link href="<?php echo base_url() ?>assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

          
        <!-- Theme Styles -->
        <link href="<?php echo base_url() ?>assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <style>
          .error{
            color: red;
            font-size: 12px;
          }
        </style>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="signin-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Connexion</span>
                                      <?php if(isset($error_message)){
                                      echo "<div class='error'>".$error_message."</div> <p>&nbsp;</p>";
                                      } ?>
                                       <div class="row">
                                           <form action="<?php echo site_url('login') ?>" method="post" class="col s12">
                                               <div class="input-field col s12">
                                                   <input id="email" name="login" type="email" class="validate">
                                                   <?php echo form_error('login','<span class="error">','</span>'); ?>
                                                   <label for="email">Email</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" name="password" type="password" class="validate">
                                                   <?php echo form_error('password','<span class="error">','</span>'); ?>
                                                   <label for="password">Password</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <button type="submit" class="waves-effect waves-light btn teal">Connexion</a>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url() ?>assets/js/alpha.min.js"></script>
        
    </body>

<!-- Mirrored from steelcoders.com/alpha/v1.2/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Sep 2016 03:44:57 GMT -->
</html>