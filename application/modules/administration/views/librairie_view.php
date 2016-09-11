
<?php $this->load->view('admin/header'); ?>
<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> GESTION DES LIBRAIRIES</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="list">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Librairie</th>
                                    <th>Telephone</th>
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


    function deleted(id){
        swal(
            {
                title: "Attention",
                text: "Voulez vous supprimer cette librairie  ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, supprimer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/librairie/delete');?>/"+id;
                $.get(url, function(data){



                });
                swal({
                        title: "Supprime!",
                        text: "La librairie a ete supprimee",
                        type: "success",
                        confirmButtonText: "ok",


                    },
                    function(){
                        toastr.success('Suppression avec success');
                        setTimeout(function(){
                            window.location.href = "<?php echo base_url('administration/librairie/');?>";
                        },2000);

                    }
                );





            }
        );
    }



    //function pour Activer
    function activer(id){
        swal(
            {
                title: "Attention",
                text: "Voulez vous activer cette librairie ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, Activer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/librairie/activer');?>/"+id;
                $.get(url, function(data){

                        swal("Activation!", "la librairie a éte activée.", "success");
                        afficherTable();


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

            "ajax": "<?php echo base_url() ?>administration/librairie/read",
            "oLanguage": {
                "sSearch": "<span>Rechercher:</span> _INPUT_", //search
                "sInfoEmpty": "Pas d'enregistrement",
                "sZeroRecords": "Pas d'enregistrement",
                "sLengthMenu": "Afficher _MENU_ enregistrements"
            },
            "columns": [
                {"render": function ( data, type, row ) {

                    return '<img src="<?php echo base_url() ?>uploads/librairies/thumbs/50x50_'+row['librairie_logo']+'"  height="50" width="50"  class="img-responsive">'

                },},

                { "data": "librairie_nom" },
                { "data": "librairie_phone" },
                { "data": "librairie_date" },


                {"render": function ( data, type, row ) {

                    return '<div class="text-center"  style="cursor:pointer"><a href="<?php base_url('administration') ?>librairie/edit/'+ row["librairie_id"]+'"  ><i class="fa fa-pencil " style="color: green"></i> </a>' +
                        '<a class=""  onclick="deleted('+ row["librairie_id"]+')" ><i class="fa fa-trash  " style="color: red"></i> </a>'+
                        '<a class=""  onclick="See('+row["librairie_id"]+')" ><i class="fa fa-eye  " style="color: blue"></i> </a></div>'

                },},


            ]
        } );});
</script>




<?php $this->load->view('admin/footer'); ?>