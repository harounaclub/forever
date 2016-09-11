
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
                            <h3 class="uppercase"> Cérémonie de remise de prix </h3>

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

                            <div class="article-content">





                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis velit ultrices, luctus ante et, tincidunt risus. Proin in arcu et odio gravida commodo at non ipsum. Maecenas commodo, enim quis pulvinar ultrices, est dolor pulvinar ante, sagittis rutrum orci lorem aliquam nulla. Duis tincidunt est quam, ut porta metus molestie nec. Aliquam varius libero non sapien vehicula dapibus. Integer elementum est tempus, lacinia mi vitae, tristique quam. Integer ut tortor sed dolor auctor commodo. Duis mattis metus at dolor auctor, in dapibus nisi efficitur. Nullam enim tellus, feugiat ut augue vel, sodales elementum neque. Cras varius eleifend ante, eget dignissim eros tristique ut. Donec at euismod justo, tincidunt imperdiet libero.</p>

                            </div>


                            <ul id="portfolio-container" class="three-columns">
                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">

                                        <div class="portfolio-item">
                                            <a href="images/news.jpg" data-rel="prettyPhoto">
                                                <img src="images/news.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>

                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">

                                        <div class="portfolio-item">
                                            <a href="mediatheque-page-video.php" data-rel="prettyPhoto">

                                                <img src="images/news2.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>
                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item">
                                            <a href="mediatheque-page-photo.php" data-rel="prettyPhoto">
                                                <img src="images/news.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>

                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item">
                                            <a href="images/news2.jpg" data-rel="prettyPhoto">
                                                <img src="images/news2.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>
                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item">
                                            <a href="images/news.jpg" data-rel="prettyPhoto">
                                                <img src="images/news.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>

                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item">
                                            <a href="images/news2.jpg" data-rel="prettyPhoto">
                                                <img src="images/news2.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>
                                <li class="isotope-item" data-categories="Photo">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item">
                                            <a href="images/news.jpg" data-rel="prettyPhoto">
                                                <img src="images/news.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>

                                <li class="isotope-item " data-categories="Photo">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item" >
                                            <a href="images/news2.jpg" data-rel="prettyPhoto">
                                                <img src="images/news2.jpg" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </li>
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