 <main class="mn-inner">
                <div class="row">
                <a href="<?php echo base_url() ?>importation/actualise_fbo_info_banque" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">update</i></a>
                    <div class="col s12">
                        <div class="page-title">Importation de FBO</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form action="/importation/lecture_bonus" class="dropzone">

                                    <div class="fallback">
                                        <input name="file" type="file" name="userfile" multiple />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card-content">
                                <span class="card-title">Liste des fichiers recemment importes</span>
                               
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Nom du fichier</th>
                                            <th data-field="name">Nombre de FBO</th>
                                            <th data-field="price">date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                    <?php 

                                    foreach ($list_fichier_importer as $lines) {
                                    ?>
                                        <tr>
                                            <td><?php echo $lines->nom_fichier; ?></td>
                                            <td><?php echo $lines->nbre_distributeur; ?></td>
                                            <td><?php echo $lines->date_creation; ?></td>
                                        </tr>
                                    <?php
                                        # code...
                                    }
                                    ?>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                   
                    <div class="footer-r white">&nbsp;</div>
                    <div class="footer-grid-r white">
                        <a class="footer-text" href="form-image-crop.html">
                            <i class="material-icons arrow-r">arrow_forward</i>
                            <span class="direction">Suivant</span>
                            <div>
                                Liste des Fbo
                            </div>
                        </a>
                    </div>
                </div>
            </div>