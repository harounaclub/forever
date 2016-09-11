
<?php $this->load->view('admin/header'); ?>

<div id="container">

    <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading  " >
                                <h3 class="panel-title"><i class="fa fa-newspaper-o fa-fw"></i> GESTION DES LIBRAIRIES</h3>
                            </div>
                            <div class="panel-body" style="background-color: #459945;color: white">

                                <form enctype="multipart/form-data" action="<?php echo site_url('administration/librairie/add'); ?>" method="POST" id="add_user" role="form">
                                    <?php
                                    $state=$this->session->flashdata('state') ;
                                    if($state=='success') {
                                        echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Félicitations!</strong> Librairie ajoutée avec succès</div>';
                                    }
                                    ?>

                                    <?php $error = $this->session->flashdata('error');
                                    if(!empty($error)){
                                      echo " <div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button><strong>Erreur !</strong>".$error."</div>";
                                    }

                                    ?>


                                    <div class="form-group">
                                        <label for="">* Nom de la librairie</label>
                                        <input type="text" class="form-control" name="librairie_nom" id="librairie_nom" required placeholder="Entrer le nom de la librairie">
                                        <?php echo form_error('librairie_nom','<span class="error">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">* Presentation de la librairie</label>
                                        <textarea name="librairie_contenu" id="librairie_contenu" class="form-control" rows="3"></textarea>
                                        <?php echo form_error('','<span class="error">','</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">* Numero de la librairie</label>
                                        <input type="text" class="form-control" name="librairie_phone" id="librairie_phone" required placeholder="Entrer le numero de la librairie">

                                        <?php echo form_error('','<span class="error">','</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="userfile">* logo de la librairie</label>
                                        <input type="file" name="userfile" id="userfile" required>
                                        <p class="help-block" style="color: black">Les dimensions recommandé (Largeur: 180px / Hauteur: 140px)</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="date">Date d'ajout</label>
                                        <input type="text" class="form-control" name="date_ajout_librairie" id="date_added" required placeholder="exemple: jj-mm-aaaa">
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
            selector: "#librairie_contenu",
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