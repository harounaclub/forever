
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
                <h4 class="modal-title">Ajouter un utilisateur</h4>
            </div>
            <form role="form" action="<?=site_url('utilisateur/create');?>" method="POST" id="form-user-add">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control" type="text" name="nom">
                    </div>

                    <div class="form-group">
                        <label>Prenoms</label>
                        <input class="form-control" type="text" name="prenoms">
                    </div>

                    <div class="form-group">
                        <label>Login</label>
                        <input class="form-control" type="text"  name="login">
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label>Ressaisissez le Mot de passe</label>
                        <input class="form-control" type="password" name="password_confirm" id="password_confirm">
                    </div>
                    <div class="form-group">
                        <label>Numero de tel</label>
                        <input class="form-control"  type="text" name="numero" id="numero">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control"  type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>role</label>
                        <select name="role" id="role">
                            <option value="2">Editeur</option>
                            <option value="1">Administrateur</option>

                        </select>

                    </div>




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
                        <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> GESTION DES ACTUALITES</h3>
                    </div>
                    <div class="panel-body">

                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary btn-lg"  id="ajout" href="<?php echo base_url() ?>administration/actualite/add">
                            Ajouter une actualite
                        </a>
                        <br><br>
                        <?php
                        echo $this->session->flashdata('success') ;

                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="list-actualite">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Auteur</th>
                                    <th>A la une</th>
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
                text: "Voulez vous activer cette actualite a la une ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, Activer",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/actualite/activated');?>/"+id;
                $.get(url, function(data){
                    if(data==='0'){
                        swal("Impossible d'activer", "", "error");

                    }else{
                        swal({
                                title: "Activer!",
                                text: "L'article  est maintenant a la une",
                                type: "success",
                                confirmButtonText: "ok",


                            },
                            function(){

                                window.location.href = "<?php echo base_url('administration');?>/actualite";


                            }
                        );

                    }


                });
            }
        );
    }









    function desactivated(id){
        swal(
            {
                title: "Attention",
                text: "Voulez vous desactiver cette actualite a la une ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Oui, Desactiver",
                cancelButtonText: "Annuler",
                //confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
            },
            function(){
                var url = "<?php echo site_url('administration/actualite/desactivated');?>/"+id;
                $.get(url, function(data){
                    if(data==='0'){
                        swal("Impossible d'activer", "", "error");

                    }else{
                        swal({
                                title: "Activer!",
                                text: "L'article  n'est plus a la une",
                                type: "success",
                                confirmButtonText: "ok",


                            },
                            function(){

                                window.location.href = "<?php echo base_url('administration');?>/actualite";


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

            "ajax": "<?=site_url('administration/actualite/read')?>",
            "oLanguage": {
                "sSearch": "<span>Rechercher:</span> _INPUT_", //search
                "sInfoEmpty": "Pas d'enregistrement",
                "sZeroRecords": "Pas d'enregistrement",
                "sLengthMenu": "Afficher _MENU_ enregistrements"
            },
            "columns": [
                {"render": function ( data, type, row ) {

                    return '<img src="<?php echo base_url() ?>uploads/thumbs/313x157_'+row['actualite_image']+'"  height="50" width="100"  class="img-responsive">'

                },},

                { "data": "actualite_titre" },
                { "data": "utilisateur_nom" },
                {"render": function ( data, type, row ) {

                    if(row['actualite_une']==1){
                        return '<div class="text-center"  style="cursor:pointer"><a onclick="desactivated('+ row["actualite_id"]+')" ><i class="fa fa-check " style="color: green"></i> </a></div>'

                    }else{
                        return '<div class="text-center"  style="cursor:pointer"><a onclick="activated('+ row["actualite_id"]+')" ><i class="fa fa-minus-circle " style="color: red"></i> </a></div>'

                    }

                },},
                { "data": "actualite_date" },

                {"render": function ( data, type, row ) {

                    return '<div class="text-center"  style="cursor:pointer"><a href="<?php base_url('administration') ?>actualite/edit/'+ row["actualite_id"]+'"  ><i class="fa fa-pencil " style="color: green"></i> </a>' +
                        '<a class=""  onclick="deleted('+ row["actualite_id"]+')" ><i class="fa fa-trash  " style="color: red"></i> </a>'+
                        '<a class=""  onclick="See('+ row["actualite_id"]+')" ><i class="fa fa-eye  " style="color: blue"></i> </a></div>'

                },},


            ]
        } );});
</script>




<?php $this->load->view('admin/footer'); ?>