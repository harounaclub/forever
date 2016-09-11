
<?php $this->load->view('admin/header'); ?>

<div class="modal fade" id="editUser" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">MODIFIER VIDEO</h4>
            </div>
            <form role="form" id="form-edit"action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Titre de la video</label>
                        <input class="form-control" type="text" name="nom" id="titre_edit">
                    </div>

                    <div class="form-group">
                        <label>Lien de la video</label>
                        <input class="form-control" type="text" name="prenoms" id="lien_edit" >
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
                <h4 class="modal-title">Ajouter une Video</h4>
            </div>
            <form role="form" action="<?php echo base_url('');?>administration/video/add" method="POST" id="form-add">
                <div class="modal-body">
                    <?php
                    echo $this->session->flashdata('add_video');
                    ?>

                    <div class="form-group">
                        <label for="">* Titre de la vidéo</label>
                        <input type="text" class="form-control" name="video_titre" id="video_titre" required placeholder="Entrez le titre">


                    </div>

                    <div class="form-group">
                        <label for="">* Lien de la vidéo</label>
                        <input type="text" class="form-control" name="video_lien" id="video_lien">

                        <p class="help-block">exemple: https://www.youtube.com/v=hgdShhfbhjjj</p>

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
                        <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> GESTION DES VIDEOS</h3>
                    </div>
                    <div class="panel-body">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg"  id="ajout" data-toggle="modal" data-target="#myModalCreate">
                            Ajouter une video
                        </button>
                        <br><br>
                        <?php
                        echo $this->session->flashdata('success') ;

                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="list-actualite">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Titre</th>
                                    <th>Lien</th>
                                    <th>A la une</th>
                                    <th>Auteur</th>
                                    <th>Date d'ajout</th>
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
                video_lien: {
                    required: true,
                },
                video_titre: {
                    required: true,

                }


            },
            messages: {

                video_titre: {
                    required: "* entrer le titre de la video"

                },
                video_lien: {
                    required: "* entrer le lien de la video"
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
    function deleted(id){
        swal(
            {
                title: "Attention",
                text: "Voulez vous supprimer cet utilisateur  ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, supprimer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/actualite/delete');?>/"+id;
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
                            window.location.href = "<?php echo base_url('administration/actualite/');?>";
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

        $('#list-actualite').DataTable( {

            "ajax": "<?=site_url('administration/video/read')?>",
            "oLanguage": {
                "sSearch": "<span>Rechercher:</span> _INPUT_", //search
                "sInfoEmpty": "Pas d'enregistrement",
                "sZeroRecords": "Pas d'enregistrement",
                "sLengthMenu": "Afficher _MENU_ enregistrements"
            },
            "columns": [
                {"render": function ( data, type, row ) {
                    var myarr = row["video_lien"].split("=");

                    return '<img src="http://i1.ytimg.com/vi/'+myarr[1]+'/hqdefault.jpg"  height="50" width="50"  ">'

                },},

                { "data": "video_titre" },
                { "data": "video_lien" },
                {"render": function ( data, type, row ) {

                    if(row['video_une']==1){
                        return '<div class="text-center"  style="cursor:pointer"><a onclick="desactivated('+ row["video_id"]+')" ><i class="fa fa-check " style="color: green"></i> </a></div>'

                    }else{
                        return '<div class="text-center"  style="cursor:pointer"><a onclick="activated('+ row["video_id"]+')" ><i class="fa fa-minus-circle " style="color: red"></i> </a></div>'

                    }

                },},
                { "data": "utilisateur_nom" },
                { "data": "video_date" },


                {"render": function ( data, type, row ) {

                    return '<div class="text-center"  style="cursor:pointer"><a data-toggle="modal" data-target="#editUser" onclick="edited('+ row["video_id"]+')"><i class="fa fa-pencil " style="color: green"></i> </a>' +
                        '<a class=""  onclick="deleted('+ row["video_id"]+')" ><i class="fa fa-trash  " style="color: red"></i> </a>'+
                        '<a class=""  onclick="See('+ row["video_id"]+')" ><i class="fa fa-eye  " style="color: blue"></i> </a></div>'

                },},


            ]
        } );});
</script>




<?php $this->load->view('admin/footer'); ?>