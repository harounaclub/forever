
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

                            <div class="title-zone">Tous dans la<span> Médiathèque</span> </div>


                            <ul id="filterable">
                                <li><a data-categories="*">Tous</a></li>
                                <li><a data-categories="Photo">Album photo</a></li>
                                <li><a data-categories="Video">Album video</a></li>
                            </ul>


                            <ul id="portfolio-container" class="three-columns">
                                <?php if(!empty($albums)){foreach($albums as $row){
                                    if($row->media_type=='video'){
                                    ?>
                                <li class="isotope-item" data-categories="Video">
                                    <div class="item-wrapp">

                                        <div class="portfolio-item">
                                            <a href="<?php echo base_url() ?>mediatheque/album_video/<?php echo $row->media_category_slug ?>">
                                                <i class="fa fa-video-camera"></i>
                                                <img src="<?php echo base_url() ?>/uploads/medias/<?php echo $row->media_image; ?>" alt=""/>
                                            </a>
                                        </div>
                                        <div class="portfolio-item-title">
                                            <a href="#"> <?php echo $row->media_category_titre; ?> </a>

                                        </div>
                                    </div>
                                </li>
                                <?php }else{ ?>

                                        <li class="isotope-item" data-categories="Photo">
                                            <div class="item-wrapp">
                                                <div class="portfolio-item">
                                                    <a href="<?php echo base_url() ?>mediatheque/album_photo/<?php echo $row->media_category_slug ?>">
                                                        <i class="fa fa-picture-o"></i>
                                                        <img src="<?php echo base_url() ?>/uploads/medias/<?php echo $row->media_image; ?>" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="portfolio-item-title">
                                                    <a href="#"><?php echo $row->media_category_titre; ?></a>

                                                </div>
                                            </div>
                                        </li>
                                <?php }}} ?>




                            </ul>


                        </div>
                        <div class="clear"></div>


                    </div>



                    <div class="horizontal-line"></div>

                    <div class="section-article">



                        <div class="p20">

                            <div class="title-zone">En<span>Actualité</span> </div>

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
                                            <a href="#"><img src="<?php echo base_url() ?>assets/<?php echo base_url() ?>/assets/images/news2.jpg" alt="" title=""></a>
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
                                            <a href="#"><img src="<?php echo base_url() ?>assets/<?php echo base_url() ?>/assets/images/news.jpg" alt="" title=""></a>
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
                                            <a href="#"><img src="<?php echo base_url() ?>assets/<?php echo base_url() ?>/assets/images/news2.jpg" alt="" title=""></a>
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
            <a href="#"><img src="<?php echo base_url() ?>assets/<?php echo base_url() ?>/assets/images/pub-box.jpg"></a>
            <div class="horizontal-line"></div>
            <?php $this->load->view('librairie/template/template_librairie_view'); ?>
        </div>


<?php $this->load->view('front/footer'); ?>