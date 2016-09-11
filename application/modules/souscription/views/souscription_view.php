
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
                            <?php foreach($actualites as $row){ ?>
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
                            <?php } ?>
                        </ul>
                    </div>


                    <div class="section-article p20">
                        <div class="one">

                            <ul class="article actu big">
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one"><img alt="" title="" data-src="<?php echo base_url() ?>assets/images/news.jpg"></div>
                                        <div class="one">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>

                                <li class="one-half">
                                    <a href="#">
                                        <div class="one"><img alt="" title="" data-src="<?php echo base_url() ?>assets/images/news2.jpg"></div>
                                        <div class="one">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one"><img alt="" title="" data-src="<?php echo base_url() ?>assets/images/news.jpg"></div>
                                        <div class="one">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>

                                <li class="one-half">
                                    <a href="#">
                                        <div class="one"><img alt="" title="" data-src="<?php echo base_url() ?>assets/images/news2.jpg"></div>
                                        <div class="one">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>

                            </ul>





                            <ul class="article actu">
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="<?php echo base_url() ?>assets/images/news2.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="<?php echo base_url() ?>assets/images/news.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="<?php echo base_url() ?>assets/images/news2.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="<?php echo base_url() ?>assets/images/news.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="<?php echo base_url() ?>assets/images/news.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="images/news2.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="images/news.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="images/news.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="images/news2.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                                <li class="one-half">
                                    <a href="#">
                                        <div class="one-third"><img alt="" title="" src="images/news2.jpg"></div>
                                        <div class="two-third">LA FONDATION SIFCA DISTINGUEE DANS L'ORDRE DU MERITE DE L'EDUCATION NATIONALE<div class="date"><i class="fa fa-clock-o"></i> 30-06-2015</div></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <p class="text-center"><a href="#" class="refresh"><i class="fa fa-refresh"></i> Voir plus</a></p>
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
                                            <a href="#"><img src="images/news.jpg" alt="" title=""></a>
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
                                            <a href="#"><img src="images/news2.jpg" alt="" title=""></a>
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

        <div class="horizontal-line"></div>




        <footer id="footer">
            <div class="top-footer">
                <div class="one-half relative bg-green">
                    <div class="head-img"><img src="<?php echo base_url() ?>assets/images/head-img.png"></div>
                    <div class="one-half">

                        <div class="p20">
                            Profiter d'un meilleur suivi, de statistiques, de compte rendu de l'état intellectuel de vos enfants.
                            <button class="btn btn-block btn-white" type="button">S'inscrire <i class="fa fa-arrow-circle-right"></i></button>
                        </div>

                    </div>
                </div>
                <div class="one-third f-right">

                    <div class="p20 font-grey">
                        Vous êtes déja abonné, activez votre accès, gérez votre abonnement et profitez des avantages.
                        <button class="btn btn-block btn-white" type="button">Se connecter <i class="fa fa-user"></i></button>
                    </div>

                    <div class="two-third">

                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="bot-footer">
                <div class="one">
                    <div class="one-half">
                        <ul class="social-links">
                            <!-- header social links starts-->
                            <li><a href="#" class="tooltip"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" class="tooltip"><i class="fa fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                    <div class="one-half"> <div class="copyright">© EcoleMedia 2016 tous droits réservés. </div>
                    </div>

                </div>
                <div class="clear"></div>
        </footer>
    </div>
</div>
</div>
<?php $this->load->view('front/footer'); ?>