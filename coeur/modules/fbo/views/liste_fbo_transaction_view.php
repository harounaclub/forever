 <main class="mn-inner">
                <div class="row">
                    
                    <div class="card-stacked">
                                <div class="card-content">
                                    <p>Code distributeur : <?php echo $code_transaction; ?> .</p>
                                    <p>Nom et prenoms : <?php echo $nom_prenom; ?> .</p>
                                    <p>Solde  : <?php echo $solde; ?> .</p>
                                    <p>Credit  : <?php echo $credit; ?> .</p>
                                </div>
                               
                            </div>


                  </br></br></br>

                    <div class="card-content">
                                <span class="card-title">Liste des fichiers recemment importes</span>
                               
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Montant bonus</th>
                                            <th data-field="name">Ajustements</th>
                                            <th data-field="price">sous-total</th>
                                            <th data-field="price"> bic</th>
                                            <th data-field="price"> date</th>
                                            <th data-field="price"> Solde</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                    <?php 

                                    foreach ($list_transaction_fbo_by_code as $lines) {
                                    ?>
                                        <tr>
                                            <td><?php echo $lines->montant_bonus; ?></td>
                                            <td><?php echo $lines->ajustements; ?></td>
                                            <td><?php echo $lines->sous_total; ?></td>

                                             <td><?php echo $lines->bic; ?></td>
                                            <td><?php echo $lines->date_transaction; ?></td>
                                            <td><?php echo $lines->apayer; ?></td>
                                            
                                           
                                        </tr>
                                    <?php
                                        # code...
                                    }
                                    ?>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                </div>
            </main>
            <div class="page-footer">
               
            </div>