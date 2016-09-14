
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/tpl_head_view'); ?>
    

<head>
        
        <!-- Title -->
    
        
</head>
    <body>
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
                <div class="spinner-layer spinner-teal lighten-1">
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
        <div class="mn-content fixed-sidebar">
          
        
          <?php 

          // entete avec titre principale
          $this->load->view('template/tpl_header_view'); 

          ?>


         <?php 

          // partie setting et chat
         $this->load->view('template/tpl_sidebar_first_view'); 

          ?>



          <?php 

          // menu de gauche
         $this->load->view('template/tpl_sidebar_left_view'); 

          ?>



          <?php 

          // contenu principale
         $this->load->view($main_content); 

          ?>

          






           
            
           
          <?php 

          // menu de gauche
         $this->load->view('template/tpl_footer_view'); 

          ?>   
           
           
        </div>
        <div class="left-sidebar-hover"></div>
        
        
        <!-- Javascripts -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/chart.js/chart.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/alpha.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/pages/dashboard.js"></script>
        
    </body>

<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Sep 2016 03:21:48 GMT -->
</html>