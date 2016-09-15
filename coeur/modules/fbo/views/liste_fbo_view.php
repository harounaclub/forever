 <main class="mn-inner">
                



                <div class="card-content">
                                <span class="card-title">Liste des fichiers recemment importes</span>
                               
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th data-field="id">code distributeur</th>
                                            <th data-field="name">noms et prenoms</th>
                                            <th data-field="price">numero_compte</th>
                                            <th data-field="price">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                    <?php 

                                    foreach ($list_fbo as $lines) {
                                    ?>
                                        <tr>
                                            <td><?php echo $lines->code_distributeur; ?></td>
                                            <td><?php echo $lines->nom_prenom; ?></td>
                                            <td><?php echo $lines->numero_compte; ?></td>
                                            <td>
                                            <a href="<?php echo base_url() ?>fbo/liste_transaction/<?php echo $lines->code_distributeur; ?>" class="waves-effect waves-light btn blue m-b-xs">transactions</a>

                                            <a href="<?php echo base_url() ?>fbo/credit/<?php echo $lines->code_distributeur; ?>" class="waves-effect waves-light btn red m-b-xs">credit</a>
                                            </td>
                                           
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