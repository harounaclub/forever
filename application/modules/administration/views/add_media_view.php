
<?php $this->load->view('admin/header'); ?>

<div id="container">

    <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading  " >
                                <h3 class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> GESTION DES MEDIAS</h3>
                            </div>
                            <div class="panel-body" style="background-color: #459945;color: white">

                                <form enctype="multipart/form-data" action="<?php echo site_url('administration/media/add_media'); ?>" method="POST" id="form-add" role="form">
                                    <?php
                                    $state=$this->session->flashdata('state') ;
                                    if($state=='success') {
                                        echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Félicitations!</strong> Actualité ajoutée avec succès</div>';
                                    }
                                    ?>

                                    <?php $im_error = $this->session->flashdata('img_error');
                                    if(!empty($im_error)){
                                      echo " <div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button><strong>Erreur !</strong>".$im_error."</div>";
                                    }

                                    ?>

                                     <div>
                                         <label for="">* Selectionnez le type de media</label>
                                         <div class="radio radio-success">
                                             <label>
                                                 <input type="radio" name="media_type"  value="photo">
                                                 Photo
                                             </label>
                                             <label>
                                                 <input type="radio" name="media_type"  value="video">
                                                 video
                                             </label>
                                         </div>
                                     </div>
                                    <input type="hidden" value="<?php  if(isset($category_id)){echo $category_id;}?>" name="category_id">
                                    <div id="bloc_video" style="display: none">
                                        <div class="form-group">
                                            <label for="">* Titre de la video </label>
                                            <input type="text" class="form-control" name="titre_video" id="titre_video" placeholder="Entrez le titre de la video" required>

                                        </div>

                                        <div class="form-group video">
                                            <label for="">* Lien de la vidéo</label>
                                            <input type="text" class="form-control" name="lien_video" id="lien_video" placeholder="Entrez le lien de la vidéo">
                                            <?php echo form_error('lien_video_media','<span class="error">','</span>'); ?>
                                        </div>

                                        <div class="form-group photo">
                                            <label for="userfile">* Ajouter une vignette de vidéo</label>
                                            <input type="file" name="image_video" required >
                                            <p class="help-block">Dimension recommandée (Largeur: 750px / Hauteur: 420px)</p>
                                        </div>

                                    </div>
                                    <div id="bloc_photo" style="display: none">
                                        <div class="form-group">
                                            <label for="">* Titre de la photo</label>
                                            <input type="text" class="form-control" name="titre_photo" id="titre_media" placeholder="Entrez le titre de la photo" required>
                                        </div>


                                        <div class="form-group photo">
                                            <label for="userfile">* Ajouter une photo </label>
                                            <input type="file" name="image_photo" required id="userfile">
                                            <p class="help-block">Dimension recommandée (Largeur: 750px / Hauteur: 420px)</p>
                                        </div>
                                    </div>
                                     <div id="bloc_submit" style="display: none">
                                         <div class="form-group">
                                             <label for="date">Date d'ajout</label>
                                             <input type="text" class="form-control" name="date_ajout_actualite" id="date_added" required placeholder="exemple: jj-mm-aaaa">
                                         </div>


                                         <div class="text-right">
                                             <button type="submit" id="submit" class="btn btn-success">Ajouter</button>
                                         </div>

                                         <p style="color:darkorange; text-align:center">
                                             les champs précédés de (*) sont obligatoires <br><br>
                                         </p>

                                     </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

</div>

<?php $this->load->view('admin/script'); ?>



<script>

    $("form#form-add").validate({
        rules: {
            titre_video: {
                required: true,
            },
            titre_photo: {
                required: true,

            },
            image_photo: {
                required: true,

            },
            image_video: {
                required: true,

            },
            lien_video: {
                required: true,

            }



        },
        messages: {

            titre_video: {
                required: "* entrer le titre de la video"

            },
            titre_photo: {
                required: "* entrer le titre de la photo"
            },
            image_video: {
                required: "selectionner une image"

            },
            image_photo: {
                required: "selectionner une image"

            },
            lien_video: {
                required: "entrer le lien de la video"

            }


        }

    });
       $(document).ready(function(){
           $('input[name=media_type]').change(function(){
               if($("input[name=media_type]:checked").val()== 'photo') {
                   $("#bloc_submit").css("display","block");
                   $("#bloc_photo").css("display","block");
                   $("#bloc_video").css("display","none");


               }
               if($("input[name=media_type]:checked").val()== 'video') {
                   $("#bloc_video").css("display","block");
                   $("#bloc_photo").css("display","none");
                   $("#bloc_submit").css("display","block");

               }

           });

       });

    $(function() {
        $( "#date_added" ).datepicker( $.datepicker.regional[ "fr" ] );
    });
</script>

<?php $this->load->view('admin/footer'); ?>