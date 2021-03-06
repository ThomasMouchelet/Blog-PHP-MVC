<?php
//Affichage du billet
include_once('modele/blog/get_billet.php');
$billet = get_billet($_GET['billet']);

htmlspecialchars($billet['titre']);
nl2br(htmlspecialchars($billet['contenu']));

//Ajout d'un commentaire
include_once('modele/blog/set_commentaire.php');
empty($_POST) ? :setCommentaire($_GET['billet'],$_POST['auteur'],$_POST['commentaire']);
	

//Affichage des commentaires
include_once('modele/blog/get_commentaires.php');
$commentaires = get_commentaires($_GET['billet'], 0, 5);

foreach($commentaires as $cle => $commentaire)
{
    $commentaires[$cle]['auteur'] = htmlspecialchars($commentaire['auteur']);
    $commentaires[$cle]['commentaire'] = nl2br(htmlspecialchars($commentaire['commentaire']));
}

//On affiche la page (vue)
include_once('vue/blog/billet.php');