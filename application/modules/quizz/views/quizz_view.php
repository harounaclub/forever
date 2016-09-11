
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

                            <div class="title-zone">Espace<span> Quizz</span> </div>



                            <ul class="quizz">
                                <li><a href="quizz-in.php">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Que pensez-vous de la composition du comité de 10 experts pour l’élaboration de la nouvelle constitution ?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Que faire des 248 ’’microbes’’ en majorité des mineurs, interpellés par la police nationale dans le cadre de l’opération ’’Epervier’’?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Suspension de l'opération de renouvellement des permis de conduire, annulation de la hausse du prix de l'électricité. Que pensez-vous de ces mesures?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>

                                <li><a href="#">Nouvelle Constitution: Alassane Ouattara propose la création d'un poste de vice président et d'un sénat. Qu'en pensez-vous?</a>
                                    <ul class="meta">
                                        <li> <i class="fa fa-clock-o"></i> 23/06/2016</li>
                                        <li> <i class="fa fa-hand-o-right"></i> 30050</li>
                                    </ul>
                                </li>
                            </ul>


                            <div class="horizontal-line"></div>
                            <nav class="pagination">
                                <ul>
                                    <li><a href=""><i class="fa fa-arrow-left"></i> </a></li>
                                    <li><a href="">1 </a></li>
                                    <li><a href="">2 </a></li>
                                    <li><a href="">3 </a></li>
                                    <li><a href="">4 </a></li>
                                    <li><a href="">5 </a></li>
                                    <li><a href=""><i class="fa fa-arrow-right"></i> </a></li>
                                </ul>
                                <div class="clearfix">
                                </div>
                            </nav>



                        </div>
                        <div class="clear"></div>


                    </div>




                    <div class="horizontal-line"></div>

                    <div class="section-article">



                        <div class="p20">

                            <div class="title-zone">En<span>Actualité</span> </div>

                            <ul class="article actu">
                                <?php  $cp=0; if(!empty($actualites)){ foreach($actualites as $row){if($cp<6){ ?>
                                    <li class="one-half">
                                        <a href="<?php echo base_url();?>actualite/details/<?php echo $row->actualite_slug ?>">
                                            <div class="one-third"><img alt="" title="" data-src="<?php echo base_url() ?>uploads/<?php echo $row->actualite_image ?>"></div>
                                            <div class="two-third"><?php echo $row->actualite_titre ?><div class="date"><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y', strtotime($row->actualite_date));  ?></div></div>
                                        </a>
                                    </li>
                                    <?php $cp++;  }}}?>



                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>






                    <div class="videos carousel">
                        <div class="p20">
                            <div class="title-zone">Actualité en<span>Vidéos</span> </div>

                            <div id="owl-slider-video">
                                <?php  foreach($videos as $row){ ?>
                                    <div class="item">
                                        <div class="service-item video">
                                            <div class="relative">
                                                <i class="fa fa-video-camera"></i>
                                                <a href="#"><img data-src="http://i1.ytimg.com/vi/<?php echo youtube_embed($row->video_lien);?>/mqdefault.jpg" alt="" title="" width="190" height="107"></a>
                                            </div>
                                            <div class="p10-20">
                                                <h6><?php  echo $row->video_titre ?></h6>

                                                <div class="date"><a href="#"> <i class="fa fa-clock-o"></i> 01/04/2016</a></div>

                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>

                    <div id=""><a href="#"><img src="<?php echo base_url() ?>assets/images/pub-box.jpg"></a></div>
                    <div class="photo carousel">
                        <div class="p20">
                            <div class="title-zone">Actualité en<span>images</span> </div>

                            <div id="owl-slider-photo">
                                <div class="item">
                                    <div class="service-item photo">
                                        <div class="relative">
                                            <i class="fa fa-picture-o"></i>
                                            <a href="#"><img src="<?php echo base_url() ?>assets/images/news2.jpg" alt="" title=""></a>
                                        </div>
                                        <div class="p10-20">
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue finibus lectus, in vestibulum sem ultricies eu.</h6>

                                            <div class="date"><a href="#"> <i class="fa fa-clock-o"></i> 01/04/2016</a></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="service-item photo">
                                        <div class="relative">
                                            <i class="fa fa-picture-o"></i>
                                            <a href="#"><img src="<?php echo base_url() ?>assets/images/news.jpg" alt="" title=""></a>
                                        </div>
                                        <div class="p10-20">
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue finibus lectus, in vestibulum sem ultricies eu.</h6>
                                            <div class="date"><a href="#"> <i class="fa fa-clock-o"></i> 01/04/2016</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="service-item photo">
                                        <div class="relative">
                                            <i class="fa fa-picture-o"></i>
                                            <a href="#"><img src="<?php echo base_url() ?>assets/images/news2.jpg" alt="" title=""></a>
                                        </div>
                                        <div class="p10-20">
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue finibus lectus, in vestibulum sem ultricies eu.</h6>
                                            <div class="date"><a href="#"> <i class="fa fa-clock-o"></i> 01/04/2016</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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