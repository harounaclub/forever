
<?php $this->load->view('admin/header'); ?>

<div id="container">

    <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading  " >
                                <h3 class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> GESTION DES ACTUALITES</h3>
                            </div>
                            <div class="panel-body" style="background-color: #459945;color: white">

                                <form enctype="multipart/form-data" action="<?php echo site_url('administration/actualite/add'); ?>" method="POST" id="add_user" role="form">
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


                                    <div class="form-group">
                                        <label for="">* Titre de l'actualité</label>
                                        <input type="text" class="form-control" name="titre_actualite" id="titre_actualite" required placeholder="Entrez le titre l'actualité">
                                        <?php echo form_error('titre_actualite','<span class="error">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">* Contenu de l'actualité</label>
                                        <textarea name="contenu_actualite" id="contenu_actualite" class="form-control" rows="3"></textarea>
                                        <?php echo form_error('contenu_actualite','<span class="error">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Source de l'actualité</label>
                                        <input type="text" class="form-control" name="source_actualite" id="source_actualite" placeholder="Entrez le source l'actualité">
                                        <?php echo form_error('source_actualite','<span class="error">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="userfile">* Image de l'actualité</label>
                                        <input type="file" name="userfile" id="userfile" required>
                                        <p class="help-block" style="color: black">Les dimensions recommandé (Largeur: 1600px / Hauteur: 800px)</p>
                                    </div>

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


        tinymce.init({
            selector: "#contenu_actualite",
            language: "fr_FR",
            fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            height: 250,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            plugins: [
                "advlist autolink link lists charmap hr anchor spellchecker",
                "searchreplace wordcount visualblocks visualchars code insertdatetime nonbreaking",
                "save table contextmenu directionality template paste textcolor colorpicker"
            ]

        });

    $(function() {
        $( "#date_added" ).datepicker( $.datepicker.regional[ "fr" ] );
    });
</script>

<?php $this->load->view('admin/footer'); ?>