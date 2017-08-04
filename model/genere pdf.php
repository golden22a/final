<?php
function login($id,$type){
   global $bdd;
    if($type==1){
    $req=$bdd->prepare("SELECT * FROM `prestataire`,`annonce_prestataire`,`reserver`,`exp` WHERE annonce_prestataire.id=reserver.id and exp.id=reserver.id_res and prestataire.id=annonce_prestataire.id_user and reserver.id=:id");
  $req->bindParam(':username',$username,PDO::PARAM_STR);
    $req->bindParam(':pwd',$pwd,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $req->closeCursor();
    return $etat;
    }else{
        
        
    }
}