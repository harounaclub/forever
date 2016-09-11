
<?php $this->load->view('admin/header'); ?>

<div id="container">

    <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row" style="padding: 20px">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-color:#f7911e;color: white">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Utilisateurs</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url('utilisateur') ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-color:#f7911e;color: white">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-newspaper-o  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Actualites</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>administration/actualite">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-color:#f7911e;color: white">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Video</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>administration/video">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel " style="background-color:#f7911e;color: white">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Clients</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>administration/client">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
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

<?php $this->load->view('admin/footer'); ?>