
<?php $this->load->view('admin/header'); ?>

<div class="modal fade" id="editUser" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">MODIFIER L'ALBUM</h4>
            </div>
            <form role="form" id="form-edit"action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">* Titre de l'album</label>
                        <input type="text" class="form-control" name="titre_cat_media" id="titre_cat_media" required placeholder="Entrez le titre l'actualité">

                    </div>

                    <div class="form-group">
                        <label for="">Descriptif de l'album</label>
                        <textarea name="resume_cat_media" id="resume_cat_media" class="form-control" rows="3"></textarea>

                    </div>

                    <div class="form-group">
                        <label for="date">Date d'ajout</label>
                        <input type="text" class="form-control" name="ajout_cat_media" id="ajout_cat_media" required placeholder="exemple: jj-mm-aaaa">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ANNULER</button>
                    <button type="submit" class="btn btn-primary">MODIFIER</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ajouter un album</h4>
            </div>
            <form role="form" action="<?php echo base_url('');?>administration/media/add_category" method="POST" id="form-add">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="">* Titre de l'album</label>
                        <input type="text" class="form-control" name="titre" id="titre" required placeholder="Entrez le titre l'album">

                    </div>

                    <div class="form-group">
                        <label for="">Descriptif de l'album</label>
                        <textarea name="resume" id="resume" class="form-control" rows="3"></textarea>

                    </div>

                    <div class="form-group">
                        <label for="date">* Date d'ajout</label>
                        <input type="text" class="form-control" name="date" id="date_added" required placeholder="exemple: jj-mm-aaaa">
                    </div>


                    <hr>

                    <p style="color:red; text-align:center">
                        les champs précédés de (*) sont obligatoires <br><br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ANNULER</button>
                    <button type="submit" class="btn btn-primary">VALIDER</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> GESTION DES ALBUMS</h3>
                    </div>
                    <div class="panel-body">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg"  id="ajout" data-toggle="modal" data-target="#myModalCreate">
                            Ajouter un album
                        </button>
                        <br><br>
                        <?php
                        $state=$this->session->flashdata('state') ;
                        if($state=='success') {
                            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Félicitations!</strong> Actualité ajoutée avec succès</div>';
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="list">
                                <thead>
                                <tr>

                                    <th>Titre </th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody ></tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php $this->load->view('admin/script'); ?>

<script>
    $(document).ready(function() {
        $("form#form-add").validate({
            rules: {
                date: {
                    required: true,
                },
                titre: {
                    required: true,

                }


            },
            messages: {

                titre: {
                    required: "* entrer le titre de l'album"

                },
                date: {
                    required: "* entrer la date d'ajout"
                }


            }

        });



    });
    function edited(id){

        //$('#editUser').modal('show');
        var url = "<?php echo site_url('administration/video/read_by_id');?>/"+id;
        var url2 = "<?php echo site_url('administration/video/edit');?>/"+id;
        $.get(url,function(data){
            var rep = JSON.parse(data);
            $('#titre_edit').val(rep.data[0].video_titre);
            $('#lien_edit').val(rep.data[0].video_lien);
            $('#form-edit').attr('action', url2);

        });

    }
    function uploaded(id){
        var url2 = "<?php echo site_url('administration/media/upload');?>/"+id;
        $('#form-upload').attr('action', url2);


        $.get(url,function(data){
            var rep = JSON.parse(data);
            $('#titre_edit').val(rep.data[0].video_titre);
            $('#lien_edit').val(rep.data[0].video_lien);


        });

    }
    function deleted(id){
        swal(
            {
                title: "Attention",
                text: "La suppression de l'album supprimera tous les medias de ce album." +
                "Voulez vous supprimer ce album ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, supprimer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/media/delete_category');?>/"+id;
                $.get(url, function(data){



                });
                swal({
                        title: "Supprime!",
                        text: "L'utilisateur a ete supprime",
                        type: "success",
                        confirmButtonText: "ok",


                    },
                    function(){
                        toastr.success('Suppression avec success');
                        setTimeout(function(){
                            window.location.href = "<?php echo base_url('administration/media/category');?>";
                        },2000);

                    }
                );





            }
        );
    }



    //function pour Activer
    function activated(id){
        swal(
            {
                title: "Attention",
                text: "Voulez vous activer cette video a la une ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, Activer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/video/activated');?>/"+id;
                $.get(url, function(data){
                    if(data==='0'){
                        swal("Impossible d'activer", "", "error");

                    }else{
                        swal({
                                title: "Activer!",
                                text: "La video est maintenant a la une",
                                type: "success",
                                confirmButtonText: "ok",


                            },
                            function(){

                                window.location.href = "<?php echo base_url('administration');?>/video";


                            }
                        );

                    }


                });
            }
        );
    }











    //fonction pour afficher et remplir le tableau

    $(document).ready(function(){
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        <?php
               $state=$this->session->flashdata('success') ;

                        ?>
        <?php if($state=='created'){
                                  echo " toastr.success('Enregistrement avec success');                               ";

                              }


                               ?>

        $('#list').DataTable( {

            "ajax": "<?=site_url('administration/media/read_category')?>",
            "oLanguage": {
                "sSearch": "<span>Rechercher:</span> _INPUT_", //search
                "sInfoEmpty": "Pas d'enregistrement",
                "sZeroRecords": "Pas d'enregistrement",
                "sLengthMenu": "Afficher _MENU_ enregistrements"
            },
            "columns": [
                { "data": "media_category_titre" },
                { "data": "media_category_desc" },
                { "data": "media_category_date" },

                {"render": function ( data, type, row ) {

                    return '<div class="text-center"  style="cursor:pointer"><a data-toggle="modal" data-target="#editUser" onclick="edited('+ row["media_category_id"]+')"><i class="fa fa-pencil " style="color: green"></i> </a>' +
                        '<a class=""  onclick="deleted('+ row["media_category_id"]+')" ><i class="fa fa-trash  " style="color: red"></i> </a>'+
                        '<a class="" href="<?=site_url('administration/media/add_media')?>/'+row["media_category_id"]+'" ><i class="fa fa-upload  " style="color: blue"></i> </a></div>'

                },},


            ]
        } );});







    $(function() {
        $( "#date_added" ).datepicker( $.datepicker.regional[ "fr" ] );
    });

</script>




<?php $this->load->view('admin/footer'); ?>