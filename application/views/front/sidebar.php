<div class="pright20">
    <div id="pub">
        <img src="<?php echo base_url() ?>assets/images/pub300x250.jpg">
    </div>
    <div class="mtop20">
        <div class="title-zone">Videos<span> a la une</span> </div>
        <?php foreach($video_une as $row){ ?>
            <div class="video-zone">
                <iframe width="280" height="220" src="https://www.youtube.com/embed/<?php echo youtube_embed($row->video_lien);?>"></iframe>
                <div class="title-video">
                    <h6><?php echo $row->video_titre ?></h6>
                    <div class="date"><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y',strtotime($row->video_date)) ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="mtop20">
        <div class="fb-page" data-href="https://www.facebook.com/MENETCOMMUNICATION" data-tabs="likebox" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NSIA-Technologies-426496094083196/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NSIA-Technologies-426496094083196/">MENETCOMMUNICATION</a></blockquote></div>
    </div>
    <div class="mtop20">
        <div class="title-zone">Notre<span>Agenda</span> <a href="#"><i class="fa fa-link"></i></a></div>
        <ul class="agenda">
            <div class="date"><i class="fa fa-clock-o"></i> Lundi 25 Avril 2016</div>
            <li><a href="">Zoom sur l’AGEDI avec le DG Ouattara Youssouf</a></li>
            <li><a href="">Conférence de presse du Comité d’organisation du Diner Gala dans le cadre des 70 ans du PDCI-RDA</a></li>
            <li><a href="">Lancement d’une initiative communautaire de proximité avec les jeunes/ assainissement du CHU de Yopougon</a></li>

            <div class="date"><i class="fa fa-clock-o"></i> Mardi 26 Avril 2016</div>
            <li><a href="">Rencontre entre le ministre Sidi Touré et Mme ADELE KHUDR, Représentante résidente de l’UNICEF</a></li>

            <div class="date"><i class="fa fa-clock-o"></i> Mercredi 27 Avril 2016</div>
            <li><a href="">Le ministre Sangafowa conduit une délégation pour la 11ème édition du Salon International de l’Agriculture du Maroc</a></li>
            <li><a href="">Atelier National sur les dispositifs d’emploi et d’insertion professionnelle des jeunes/ UEMOA</a></li>
            <li><a href="">Côte d’Ivoire: La coordination syndicale des régies financières annonce un “arrêt de travail“</a></li>
        </ul>
    </div>

    <div class="mtop20">
        <div class="title-zone">Tableaux<span>d'honneur <a href="#"><i class="fa fa-link"></i></a></span>
            <a href="#"><i class="fa fa-link"></i></a></div>
        <ul class="honnored">
            <li>
                <a href="">
                    <div class="image"> <img src="<?php echo base_url() ?>assets/images/user-profile.jpg"></div>
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
                    <div class="image"> <img src="<?php echo base_url() ?>assets/images/user-profile.jpg"></div>
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
                    <div class="image"> <img src="<?php echo base_url() ?>assets/images/user-profile.jpg"></div>
                    <div class="">
                        <span class="bold">Doukouassi Smith</span>
                        <p>Classe : <br> Etablissement : </p>
                    </div>
                    <div class="moyenne">12,8<br> <span>Voir <i class="fa fa-arrow-circle-right"></i></span></div>
                    <div class="clear"></div>
                </a>
            </li>
        </ul>
    </div>

    <div class="mtop20">
        <div class="title-zone">Semaine du <span>QUIZZ</span> <a href="#"><i class="fa fa-link"></i></a></div>

        <div class="quizz">
            <h6>Ecole média à t'il une importance cruciale dans le monde des TIC</h6>
            <form>
                <div class="radio radio-success">
                    <input id="yes" type="radio" name="optionyes" value="yes">
                    <label for="yes">Oui, c'est le cas</label>
                    <input id="no" type="radio" name="optionyes" value="no" >
                    <label for="no">Non, je passe</label>
                </div>
                <button class="btn btn-block btn-white" type="button">Valider <i class="fa fa-check"></i></button>
            </form>
            <div class="link-to"><a href="#"> Voir tous les quizz <i class="fa fa-arrow-circle-right"></i></a></div>
        </div>
    </div>

    <div class="mtop20">
        <div class="biblio">
            <div class="title-zone">En<span>bibliothèque</span> <a href="#"><i class="fa fa-link"></i></a></div>
        </div>
        <ul class="biblio">
            <li><a href="#"> Anciens devoirs </a></li>
            <li><a href="#"> Anales </a></li>
        </ul>
    </div>

</div>