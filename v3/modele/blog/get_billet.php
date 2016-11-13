<?php
//Récupérer le billet en fonction de l'id du billet
function get_billet($id)
{
	global $bdd;
    $id = (int) $id;

	// Récupération du billet
	$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
	$req->execute(array($id));

    $req->execute();
    $billet = $req->fetch();
    
    return $billet;
}