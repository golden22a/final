<?php
function getInfoUser($id){
     global $bdd;
    $req=$bdd->prepare("SELECT *  FROM `prestataire` WHERE `id`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $req->closeCursor();
    return $etat;
    
}