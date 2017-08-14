<?php
function annonce($id){
   global $bdd;
    $req=$bdd->prepare("SELECT count(id_user) as nombre FROM `annonce_expediteur` WHERE `id_user`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $etat=$etat['nombre'];
    $req->closeCursor();
    return $etat;
}

function annonce_terminer($id){
   global $bdd;
    $req=$bdd->prepare("SELECT count(id_res) as nombre FROM `reserver` WHERE `id_res`=:id and `deposer`=1 and `type`=1" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
     $req->closeCursor();
    $etat=$etat['nombre'];
     $req=$bdd->prepare("SELECT count(annonce_expediteur.id_user) as nombre FROM `reserver`,`annonce_prestataire` WHERE `id_user`=:id and `id_annonce`=annonce_expediteur.id and `deposer`=1 and `type`=0" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat1=$req->fetch();
    $req->closeCursor();
     $etat=$etat+$etat1['nombre'];
    return $etat;
}


function affiche($date){
     global $bdd;
    $req=$bdd->prepare("SELECT * ,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` having DATEONLY >=:date  and id not in (select id_annonce from `reserver` where `type`=1 )");
    $req->bindParam(':date',$date,PDO::PARAM_STR);
     $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    
    return $etat;
}
function reservation($date,$id){
     global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `reserver`,`annonce_expediteur`,`prestataire` where prestataire.id=reserver.id_res and id_annonce=annonce_expediteur.id and type=0 and id_user=:id and date_attribuer is null  having DATEONLY >=:date ");
    $req->bindParam(':date',$date,PDO::PARAM_STR);
     $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function reserver($id,$id_user,$numero,$adresse){
    global $bdd;
    $req=$bdd->prepare("INSERT INTO `reserver`( `id_annonce`, `id_res`, `type`, `numero_entrepot`, `adresse_entrepot`) VALUES (:id,:id_user,1,:numero,:adresse)");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->bindParam(':id_user',$id_user,PDO::PARAM_STR);
    $req->bindParam(':numero',$numero,PDO::PARAM_STR);
    $req->bindParam(':adresse',$adresse,PDO::PARAM_STR);
    $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function confirmer($id,$numero,$adresse){
 global $bdd;
    $req=$bdd->prepare("UPDATE `reserver` set `numero_entrepot`=:numero , `adresse_entrepot`=:adresse , `date_attribuer`=now() where `id`=:id");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->bindParam(':numero',$numero,PDO::PARAM_STR);
    $req->bindParam(':adresse',$adresse,PDO::PARAM_STR);
     $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function deposer($id){
   global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_expediteur` WHERE `id_user`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function terminer_reserver($id){
     global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire`,`reserver` WHERE `id_res`=:id and `id_annonce`=annonce_prestataire.id and `type`=1 and `deposer`=1 ");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    print_r($req->errorInfo());
    $etat=$req->fetchAll();
     $req->closeCursor();
      

    return $etat;
}
function terminer($id){
     global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_expediteur`,`reserver` WHERE ` `id_annonce`=annonce_expediteur.id and `type`=0 and `deposer`=1 ");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    print_r($req->errorInfo());
    $etat=$req->fetchAll();
     $req->closeCursor();
      

    return $etat;
}
function annuler($id){
 global $bdd;
    $req=$bdd->prepare("delete from `reserver`  where `id`=:id");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
     $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}


