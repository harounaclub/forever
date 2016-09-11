
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
                    <div class="flexslider portfolio-items-slider slide zone mt-10">
                        <div class="title-slider"> A la Une</div>
                        <ul class="slides">
                            <?php if(!empty($actualites_une)){ foreach($actualites_une as $row){ ?>
                            <li>
                                <div class="">
                                    <a href="<?php echo base_url();?>actualite/details/<?php echo $row->actualite_slug ?>" ><img alt="" title="" src="<?php echo base_url() ?>uploads/<?php echo $row->actualite_image ?>">
                                        <div class="post-data">
                                            <div class="post-data-container">
                                                <h3><?php echo $row->actualite_titre ?></h3>

                                                <div class="date"><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y', strtotime($row->actualite_date));  ?></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>


                    <div class="section-article p20">
                        <div class="one">

                            <ul class="article actu big">

                                <?php  $cp=0; if(!empty($actualites)){ foreach($actualites as $row){if($cp<4){ ?>
                                <li class="one-half">
                                    <a href="<?php echo base_url();?>actualite/details/<?php echo $row->actualite_slug ?>">
                                        <div class="one"><img alt="" title="" data-src="<?php echo base_url() ?>uploads/<?php echo $row->actualite_image ?>"></div>
                                        <div class="one"><?php echo $row->actualite_titre ?><div class="date"><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y', strtotime($row->actualite_date));  ?></div></div>
                                    </a>
                                </li>
                                <?php $cp++;  }}}?>


                            </ul>





                            <ul class="article actu">
                                <?php  $cp=0; if(!empty($actualites)){ foreach($actualites as $row){if($cp<4){ ?>
                                <li class="one-half">
                                    <a href="<?php echo base_url();?>actualite/details/<?php echo $row->actualite_slug ?>">
                                        <div class="one-third"><img alt="" title="" data-src="<?php echo base_url() ?>uploads/<?php echo $row->actualite_image ?>"></div>
                                        <div class="two-third"><?php echo $row->actualite_titre ?><div class="date"><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y', strtotime($row->actualite_date));  ?></div></div>
                                    </a>
                                </li>
                                    <?php $cp++;  }}}?>
                            </ul>
                            <div class="clear"></div>
                            <p class="text-center"><a href="<?php echo base_url();?>actualite" class="refresh"><i class="fa fa-refresh"></i> Voir plus</a></p>
                        </div>
                        <div class="clear"></div>
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