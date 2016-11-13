<?php include 'header.php'; ?>

      <h1>le billet</h1>

			<div class="row">
                
                 <nav>
                    <div class="nav-wrapper">
                      <div class="col s12">
                        <a href="blog.php" class="breadcrumb">Retour Accueil</a>
                      </div>
                    </div>
                  </nav>


                  <div class="news">
                        <h3>
                            <?php echo htmlspecialchars($billet['titre']); ?>
                            <em>le <?php echo $billet['date_creation_fr']; ?></em>
                        </h3>
                        
                        <p>
                        <?php
                        echo nl2br(htmlspecialchars($billet['contenu']));
                        ?>
                        </p>
                    </div>

                    <h2>Commentaires</h2>


                  <?php 

                  if (empty($commentaires)) { ?>
                    <p>Aucun commentaire</p>
                    <?php }else{ 
                      foreach($commentaires as $commentaire){ ?>
                      <div class="col l12 ">
                          <div class="card-panel grey lighten-5 z-depth-1">
                              <div class="row valign-wrapper">
                                  <div class="col s4">
                                    <?php echo htmlspecialchars($commentaire['auteur']); ?></strong> le <?php echo $commentaire['date_commentaire_fr']; ?>
                                  </div>
                                  <div class="col s8">
                                    <span class="black-text">
                                      <?php echo nl2br(htmlspecialchars($commentaire['commentaire'])); ?>
                                    </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php }} ?>

                  <div class="row">
                        <div class="col s12 m8 l6 ">
                            <form action="" method="post">
                                <p>
                                <label for="auteur">Pseudo</label> : <input type="text" name="auteur" id="auteur" /><br />
                                <label for="commentaire">Message</label> :  <input type="text" name="commentaire" id="commentaire" /><br />

                                <input class="waves-effect waves-light btn" type="submit" value="Envoyer" />
                            </p>
                            </form>
                        </div>
                    </div>
                </div><!-- row -->

                
<?php include 'footer.php'; ?>