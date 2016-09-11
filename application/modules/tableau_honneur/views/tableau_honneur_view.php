
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

                            <div class="title-zone">Tableaux<span> d'honneur 2016</span> </div>

                            <h3 class="uppercase"> EcoleMedia récompense les tableaux d'honneur </h3>

                            <div class="share">
                                <div class="facebook fleft">
                                    <div class="fb-share-button"
                                         data-href=""
                                         data-layout="button_count">
                                    </div>
                                </div>
                                <div class=" googleplus fleft">
                                    <div class="g-plus" data-action="share" data-annotation="bubble" data-height="24"></div>
                                </div>
                                <div class="twitter">
                                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
                                </div>
                                <div class="clear"></div>
                            </div>



                            <div class="one honneur">
                                <ul class="tabs-nav">
                                    <li class="active">
                                        <a href="#national">Honneur National</a>
                                    </li>
                                    <li>
                                        <a href="#major">Major de classe</a>
                                    </li>

                                </ul>
                                <!-- end .tabs-nav -->
                                <div class="tabs-container">
                                    <div class="tab-content" id="national">
                                        <ul class="honnored">
                                            <li>
                                                <a href="tableaux-d-honneur-page.php">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">John Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">15,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Aaron Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">14,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Doukouassi Smith</span>
                                                        <p>Classe : <br> Etablissement : </p>
                                                    </div>
                                                    <div class="moyenne">12,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">John Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">15,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Aaron Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">14,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Doukouassi Smith</span>
                                                        <p>Classe : <br> Etablissement : </p>
                                                    </div>
                                                    <div class="moyenne">12,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
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
                                    <!-- end #tab1 -->
                                    <div class="tab-content" id="major">
                                        <ul class="honnored">
                                            <li>
                                                <a href="tableaux-d-honneur-page.php">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">John Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">15,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Aaron Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">14,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Doukouassi Smith</span>
                                                        <p>Classe : <br> Etablissement : </p>
                                                    </div>
                                                    <div class="moyenne">12,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">John Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">15,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Aaron Smith</span>
                                                        <p>Classe : <br> Etablissement :</p>
                                                    </div>
                                                    <div class="moyenne">14,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="">
                                                    <div class="image"> <img src="<?php echo base_url() ?>/assets/images/user-profile.jpg"></div>
                                                    <div class="">
                                                        <span class="bold">Doukouassi Smith</span>
                                                        <p>Classe : <br> Etablissement : </p>
                                                    </div>
                                                    <div class="moyenne">12,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                                                    <div class="clear"></div>
                                                </a>
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
                                    <!-- end #tab2 -->

                                </div>
                                <!-- end .tabs-container -->
                            </div>

                            <div class="clear"></div>




                        </div>
                        <div class="clear"></div>

                    </div>

                    <div class="acticle-similaire">
                        <div class="title-similaire">Dans les archives</div>
                        <div class="p20">
                            <ul class="article honneur">
                                <li class="one-sixth">
                                    <a href="#"><div>2015</div></a>
                                </li>
                                <li class="one-sixth">
                                    <a href="#"><div>2014</div></a>
                                </li>
                                <li class="one-sixth">
                                    <a href="#"><div>2013</div></a>
                                </li>
                                <li class="one-sixth">
                                    <a href="#"><div>2012</div></a>
                                </li>
                                <li class="one-sixth">
                                    <a href="#"><div>2011</div></a>
                                </li>
                                <li class="one-sixth">
                                    <a href="#"><div>2010</div></a>
                                </li>
                                <li class="one-sixth">
                                    <a href="#"><div>2009</div></a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
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

                    <div id=""><a href="#"><img src="<?php echo base_url() ?>/assets/images/pub-box.jpg"></a></div>
                    <div class="photo carousel">
                        <div class="p20">
                            <div class="title-zone">Actualité en<span>images</span> </div>

                            <div id="owl-slider-photo">
                                <div class="item">
                                    <div class="service-item photo">
                                        <div class="relative">
                                            <i class="fa fa-picture-o"></i>
                                            <a href="#"><img src="<?php echo base_url() ?>/assets/images/news2.jpg" alt="" title=""></a>
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
                                            <a href="#"><img src="<?php echo base_url() ?>/assets/images/news.jpg" alt="" title=""></a>
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
                                            <a href="#"><img src="<?php echo base_url() ?>/assets/images/news2.jpg" alt="" title=""></a>
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

            <?php $this->load->view('librairie/template/template_librairie_view'); ?>
            <div class="clear"></div>
        </div>



<?php $this->load->view('front/footer'); ?>