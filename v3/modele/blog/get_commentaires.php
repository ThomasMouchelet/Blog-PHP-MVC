<?php
//Rcupérer les commentaires en fonction de l'id du billet
function get_commentaires($id_billet, $offset, $limit)
{
    global $bdd;
    $id_billet = (int) $id_billet;
    $offset = (int) $offset;
    $limit = (int) $limit;

    // Récupération des commentaires
	$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = :id_billet ORDER BY date_commentaire DESC LIMIT :offset, :limit');

    $req->bindParam(':id_billet', $id_billet, PDO::PARAM_INT);
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $commentaires = $req->fetchAll();
    
    return $commentaires;
}