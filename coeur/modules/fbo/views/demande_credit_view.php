
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
                                <span class="card-title">Informations credits</span><br>
                                <div class="row">
                                    <form action="<?php echo base_url() ?>fbo/ajout_credit" method="POST" class="col s12">
                                        <div class="row">
                                        <input type="text" name="code_transaction" value="<?php echo $code_transaction; ?>">
                                          <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="text" name="montant_credit" class="validate" id="icon_prefix">
                                                <label for="icon_prefix">Montant</label>
                                            </div>


                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="text" name="motif" class="validate" id="icon_prefix">
                                                <label for="icon_prefix">Motif</label>
                                            </div>

                                            <input type="submit" value="Enregistrer" class="waves-effect waves-light btn green m-b-xs" />
                                           
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    
                                </div>
                            </div>

                    
                </div>
            </main>
            <div class="page-footer">
               
            </div>


               