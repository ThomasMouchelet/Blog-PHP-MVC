<?php

function setCommentaire($id_billet,$auteur,$commentaire){
	global $bdd;
    $id_billet = (int) $id_billet;
    $auteur =  $auteur;
    $commentaire = $commentaire;

	$req = $bdd->prepare('INSERT INTO commentaires (id_billet, auteur, commentaire, date_commentaire) VALUES(:id_billet, :auteur, :commentaire, NOW() )');
	$req->execute(array(
    'id_billet'=>$id_billet,
    'auteur'=>$auteur,
    'commentaire'=>$commentaire
    ));
}