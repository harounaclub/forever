
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








</div>
</div>
<!--Les js second-->

<script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/prettyPhoto.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/isotope.min.js" type="text/javascript"></script>
<script src="http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/owlcarousel/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>assets/js/flex-slider.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.modern-ticker.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.smoothscroll.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.lazyloadxt.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/config.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/core.js" type="text/javascript"></script>
<script type="text/javascript">
    function UR_Start()
    {
        UR_Nu = new Date;
        UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
        document.getElementById("ur").innerHTML = UR_Indhold;
        setTimeout("UR_Start()",1000);
    }
    function showFilled(Value)
    {
        return (Value > 9) ? "" + Value : "0" + Value;
    }

</script>
<script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'fr'}

    $('#example').dataTable({

        "scrollCollapse": true,
        "paging": false,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/f2c75b7247b/i18n/French.json"
        }
    });
    $('#example_sans_recherche').dataTable({

        "scrollCollapse": true,
        "paging": false,
        "searching":   false,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/f2c75b7247b/i18n/French.json"
        }
    });

</script>

</body>

</html>
