<?php include 'header.php'; ?>

        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
 
        <?php
        foreach($billets as $billet)
        {
        ?>
        <div class="news">
            <h3>
                <?php echo $billet['titre']; ?>
                <em>le <?php echo $billet['date_creation_fr']; ?></em>
            </h3>
            
            <p>
            <?php echo $billet['contenu']; ?>
            <br />
            <em><a href="blog.php?section=commentaires&billet=<?php echo $billet['id']; ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        ?>
<?php include 'footer.php'; ?>