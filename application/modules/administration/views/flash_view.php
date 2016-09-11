
<?php $this->load->view('admin/header'); ?>

<div class="modal fade" id="editUser" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">MODIFIER UTILISATEUR</h4>
            </div>
            <form role="form" id="form-user-edit"action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control" type="text" name="nom" id="nom_edit">
                    </div>

                    <div class="form-group">
                        <label>Prenoms</label>
                        <input class="form-control" type="text" name="prenoms" id="prenoms_edit" >
                    </div>

                    <div class="form-group">
                        <label>Matricule</label>
                        <input class="form-control" type="text"  name="matricule"  id="matricule-edit" disabled>
                    </div>
                    <!--                        <div class="form-group">
                                                <label>Numero de tel</label>
                                                <input class="form-control" placeholder="Enter text" type="text" name="numero" id="numero">
                                            </div>-->
                    <div class="form-group">
                        <label>Mot de pass</label>
                        <input class="form-control" type="text" name="password" id="password_edit">
                    </div>

                    <div class="form-group">
                        <label>Roles</label>
                        <select name="role_edit" class="form-control">
                            <option value="" selected id="role_edit">Selectionner les roles</option>
                            <?php foreach ($roles as $value) { ?>
                                <option value="<?=$value->id_role?>"><?=$value->lib_role?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Equipes</label>
                        <select name="equipe_edit" class="form-control">
                            <option value=""  selected id="equipe_edit">Selectionner les equipes</option>
                            <?php foreach ($equipes as $value) { ?>
                                <option value="<?=$value->id_equipe?>"><?=$value->lib_equipe?></option>
                            <?php } ?>
                        </select>
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
                <h4 class="modal-title">Ajouter une flash</h4>
            </div>
            <form role="form" action="<?php echo base_url('');?>administration/flash/add" method="POST" id="form-user-add">
                <div class="modal-body">
                    <?php
                    echo $this->session->flashdata('add_flash');
                    ?>

                    <div class="form-group">
                        <label for="">* Titre du flash news</label>
                        <input type="text" class="form-control" name="flash_titre" id="flash_titre" required placeholder="Entrez le titre">


                    </div>

                    <div class="form-group">
                        <label for="">* contenu du flash</label>
                        <input type="text" class="form-control" name="flash_contenu" id="flash_contenu">



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
                        <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> GESTION DES FLASH NEWS</h3>
                    </div>
                    <div class="panel-body">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg"  id="ajout" data-toggle="modal" data-target="#myModalCreate">
                            Ajouter une flash news
                        </button>
                        <br><br>
                        <?php
                        echo $this->session->flashdata('success') ;

                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="list-flash">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Titre</th>
                                    <th>contenu</th>
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
        $("form#form-user-add").validate({
            rules: {
                nom: {
                    required: true,
                    minlength: 3
                },
                prenoms: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                login: {
                    required: true,
                    minlength: 5

                },
                numero: {
                    required: true,
                    number: true,
                    minlength: 8

                },
                password: {
                    required: true,

                    minlength: 8

                },
                password_confirm: {
                    required:true,
                    minlength : 8,
                    equalTo : "#password"
                }

            },
            messages: {

                nom: {
                    required: "* entrer le nom",
                    minlength: "le nom doit comporter au moins 3 characteres"
                },
                prenoms: {
                    required: "* entrer le prenoms",
                    minlength: "le prenom doit comporter au moins 3 caracteres"
                },
                email: {
                    required: "* entrer un email",
                    email:"* entrer un valide email"
                },
                numero: {
                    required: "* entrer un numero de telephone",
                    minlength: "le numero doit etre d'au moin 8 chiffres"

                },
                password: {
                    required: "* entrer un mot de passe",
                    minlength: "le mot de passe doit etre d'au moin 8 caracteres"

                },
                password_confirm: {
                    required: "* comfirmer votre mot de passe",
                    minlength: "le mot de passe doit etre d'au moin 8 caracteres",
                    equalTo:"Le mot de passe doit etre le meme"
                },
                role: {
                    required: "* selectionner un role"
                },
                login: {
                    required: "* entrer le votre login",
                    minlength: "votre login doit comporter 5 caracteres"
                }


            }

        });



    });
    function edited(id){

        //$('#editUser').modal('show');
        var url = "<?=site_url('utilisateur/read_by_id')?>/"+id;
        var url2 = "<?=site_url('utilisateur/modifier')?>/"+id;
        $.get(url,function(data){
            var rep = JSON.parse(data);
            $('#nom_edit').val(rep.data[0].utilisateur_nom);
            $('#prenoms_edit').val(rep.data[0].utilisateur_prenoms);
            $('#email_edit').val(rep.data[0].utilisateur_email);
            $('#phone_edit').val(rep.data[0].utilisateur_phone);
            $('#role_edit').val(rep.data[0].utilisateur_status);
            $('#form-user-edit').attr('action', url2);

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
                var url = "<?php echo site_url('administration/flash/delete');?>/"+id;
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
                            window.location.href = "<?php echo base_url('administration/flash/');?>";
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
                text: "Voulez vous activer cet utilisateur ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, Activer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('utilisateur/activer');?>/"+id;
                $.get(url, function(data){
                    if(data==='0'){
                        swal("Impossible d'activer", "L equipe de l utilisateur est desactivée", "error");

                    }else{
                        swal("Activation!", "l'utilisateur a éte activé.", "success");
                        $('#tableUser').val('');
                        afficherTable();
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

        $('#list-flash').DataTable( {

            "ajax": "<?=site_url('administration/flash/read')?>",
            "oLanguage": {
                "sSearch": "<span>Rechercher:</span> _INPUT_", //search
                "sInfoEmpty": "Pas d'enregistrement",
                "sZeroRecords": "Pas d'enregistrement",
                "sLengthMenu": "Afficher _MENU_ enregistrements"
            },
            "columns": [
                {"render": function ( data, type, row ) {

                    return '<img src="<?php echo base_url() ?>assets/images/FlashNews.png"  height="40" width="60"  class="img-responsive">'

                },},

                { "data": "flash_titre" },
                { "data": "flash_contenu" },
                { "data": "utilisateur_nom" },
                { "data": "flash_date" },


                {"render": function ( data, type, row ) {

                    return '<div class="text-center"  style="cursor:pointer"><a href="<?php base_url('administration') ?>flash/edit/'+ row["flash_id"]+'"  ><i class="fa fa-pencil " style="color: green"></i> </a>' +
                        '<a class=""  onclick="deleted('+ row["flash_id"]+')" ><i class="fa fa-trash  " style="color: red"></i> </a>'+
                        '<a class=""  onclick="See('+ row["flash_id"]+')" ><i class="fa fa-eye  " style="color: blue"></i> </a></div>'

                },},


            ]
        } );});
</script>




<?php $this->load->view('admin/footer'); ?>