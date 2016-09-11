
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="<?php echo base_url() ?>assets/admin/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo base_url() ?>assets/admin/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
    <body >


    <div class="container wrapper-bg ">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="row" >

                        <div class="col-sm-12" style="background-color: white ;margin-left: 15px;margin-right: 15px">
                            <img src="<?php echo base_url() ?>assets/images/head-img.png " alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-12" style="background-color: #48615b;margin-left: 15px;margin-right: 15px">
                            <div class="row">

                                <div class="form-bg">
                                    <div class="logo" style="padding-bottom: 10px">
                                        <img src="<?php echo base_url() ?>assets/admin/img/logo.png " alt="" width="100" class="img-responsive">
                                    </div>
                                    <div class="errorTxt"></div>
                                    <section>
                                        <div id="message" style="display:none;"></div>
                                    </section>
                                    <form class="form-horizontal" id="login-form" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon  form-addon"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:white"></span></div>
                                                    <input type="text" class="form-control" id="username" placeholder="login" name="username">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon form-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true" style="color:white"></span></div>
                                                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12 " style="margin-bottom: 20px">
                                                <button type="submit" class="btn btn-primary btn-block form-submit" style="height: 50px;">Connectez vous</button>
                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                
            </div>

            
        </div>





    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.validate.min.js" type="text/javascript"></script>
        <script type="text/javascript">
           
   $(document).ready(function(){
       
        // Validation
                $("#login-form").validate({
                    
                    // Rules for form validation
                    rules: {
                        username: {
                            required: true
                          
                        },
                        password: {
                            required: true,
                            //minlength: 8
                           
                        }
                    },
                    // Messages for form validation
                    messages: {
                        username: {
                            required: '<div class="alert alert-warning fade in"><button data-dismiss="alert" class="close"></button><i class="fa-fw fa fa-warning"></i><strong>incorrect:</strong> Entrez votre login.</div>'

                        },
                        password: {
                            required: '<div class="alert alert-warning fade in"><button data-dismiss="alert" class="close"></button><i class="fa-fw fa fa-warning"></i><strong>incorrect:</strong> Entrez un mot de passe.</div>'
                        }
                    },
                    errorElement : 'div',
                   errorLabelContainer: '.errorTxt',
                submitHandler: function(form) {
				
            var formData = new FormData($(form)[0]);
            $.ajax({
                url: "<?php echo site_url('utilisateur/login/authentification'); ?>",
                type: 'POST',
                data: formData,
                async: false,
                success: function(data) {
                    console.log(data);
			if (data === '1'){
                                  window.location.href = "<?php echo base_url('dashboard'); ?>";
                                    
                                } else{
                                
                                   $("#message").css( "display","block" );
                                   $("#message").html('<div class="alert alert-warning fade in"><button data-dismiss="alert" class="close"></button><i class="fa-fw fa fa-warning"></i><strong>incorrect:</strong> Votre login ou mot de passe est incorrect.</div>');
                                }		
                },
				error: function(data){
                console.log("error");
                console.log(data);
		alert("Error :"+data);
                },
                cache: false,
                contentType: false,
                processData: false
            });

            return false;
        }
                    
                });
       
   });
            
               
            
        </script>

    </body>
</html>