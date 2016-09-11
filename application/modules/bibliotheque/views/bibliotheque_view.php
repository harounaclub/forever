
<?php $this->load->view('front/header'); ?>

<div id="content">
    <div class="container">
        <?php foreach($pub1 as $row){ ?>
            <div id="pub" class="shadow-box"><a href="#"><img src="<?php echo base_url() ?>uploads/publicites/<?php echo $row->publicite_image?>"></a></div>
        <?php } ?>
        <div class="content-zone-all shadow-box">

            <div class="one">
                <div  class="divider"></div>
                <div class="two-third zone-left ">

                    <div class="section-article p20">
                        <div class="one">
                            <div class="title-zone">Espace<span> Bibliothèque</span> </div>

                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>catégories</th>
                                    <th>Type</th>
                                    <th>niveau</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>

                                <tr>
                                    <td> <a href="">Epreuve mathématique Tle 2011</a></td>
                                    <td>Devoirs</a></td>
                                    <td>PDF</td>
                                    <td>Tle</td>
                                </tr>
                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>

                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>
                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>

                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>
                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>

                                <tr>
                                    <td> <a href="">La grammaire en francais</a></td>
                                    <td>Anale</a></td>
                                    <td>PDF</td>
                                    <td>6e</td>
                                </tr>

                                </tbody>
                            </table>


                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="one-third zone-right">
                    <?php $this->load->view('front/sidebar'); ?>

                </div>

            </div>
            <div class="horizontal-line"></div>
            <a href="#"><img src="<?php echo base_url() ?>assets/images/pub-box.jpg"></a>
            <div class="horizontal-line"></div>
            <?php $this->load->view('librairie/template/template_librairie_view'); ?>
        </div>





<?php $this->load->view('front/footer'); ?>