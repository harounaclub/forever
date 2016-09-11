
<?php $this->load->view('admin/header'); ?>

<div id="container">

    <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading  " >
                                <h3 class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> GESTION DES ACTUALITES</h3>
                            </div>
                            <div class="panel-body" style="background-color: #459945;color: white">

                                <form enctype="multipart/form-data" action="<?php echo site_url('administration/actualite/edit'); ?>" method="POST" id="add_user" role="form">
                                    <?php
                                    $state=$this->session->flashdata('state') ;
                                    if($state=='success') {
                                        echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Félicitations!</strong> Actualité ajoutée avec succès</div>';
                                    }
                                    ?>

                                    <?php
                                    if(!empty($img_error)){
                                      echo " <div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button><strong>Erreur !</strong>".$img_error."</div>";
                                    }

                                    ?>

                                     <?php if(isset($actualite)&&!empty($actualite)){ foreach($actualite as $row){?>
                                         <input type="hidden" class="form-control" name="id_actualite" id="id_actualite" value="<?php echo $row->actualite_id; ?>">
                                    <div class="form-group">
                                        <label for="">* Titre de l'actualité</label>
                                        <input type="text" class="form-control" name="titre_actualite" id="titre_actualite" value=" <?php echo $row->actualite_titre; ?>">

                                    </div>

                                    <div class="form-group">
                                        <label for="">* Contenu de l'actualité</label>
                                        <textarea name="contenu_actualite" id="contenu_actualite" class="form-control" rows="3"><?php echo $row->actualite_contenu; ?></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="">Source de l'actualité</label>
                                        <input type="text" class="form-control" name="source_actualite" id="source_actualite" value="<?php echo $row->actualite_source; ?>">

                                    </div>

                                    <div class="form-group">
                                        <label for="userfile">* Image de l'actualité</label>
                                        <input type="file" name="userfile" id="userfile" >
                                        <p class="help-block" style="color: black">Les dimensions recommandé (Largeur: 750px / Hauteur: 420px)</p>
                                        <img src="<?php echo base_url() ?>uploads/thumbs/<?php echo '313x157_'.$row->actualite_image; ?>" alt="" width="150" height="100" >
                                    </div>


                                    <div class="form-group">
                                        <label for="date">Date d'ajout</label>
                                        <input type="text" class="form-control" name="date_ajout_actualite" id="date_added" value="<?php echo date('d-m-Y', strtotime($row->actualite_date))?>" >
                                    </div>
                                   <?php }} ?>
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