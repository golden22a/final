<?php
function annonce($id){
   global $bdd;
    $req=$bdd->prepare("SELECT count(id_user) as nombre FROM `annonce_prestataire` WHERE `id_user`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $etat=$etat['nombre'];
    $req->closeCursor();
    return $etat;
}

function annonce_terminer($id){
   global $bdd;
    $req=$bdd->prepare("SELECT count(id_res) as nombre FROM `reserver` WHERE `id_res`=:id and `deposer`=1 and `type`=0" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
     $req->closeCursor();
    $etat=$etat['nombre'];
     $req=$bdd->prepare("SELECT count(annonce_prestataire.id_user) as nombre FROM `reserver`,`annonce_prestataire` WHERE `id_user`=:id and `id_annonce`=annonce_prestataire.id and `deposer`=1 and `type`=1" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat1=$req->fetch();
    $req->closeCursor();
     $etat=$etat+$etat1['nombre'];
    return $etat;
}


function chiffre($id){
   global $bdd;
    $req=$bdd->prepare("SELECT sum(prix) as prixf FROM `reserver`,`annonce_expediteur` WHERE `id_res`=:id  and `id_annonce`=annonce_expediteur.id and `deposer`=1 and `type`=0" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $req->closeCursor();
     $etat=$etat['prixf'];
      $req=$bdd->prepare("SELECT sum(prix) as prixf FROM `reserver`,`annonce_prestataire` WHERE `id_user`=:id  and `id_annonce`=annonce_prestataire.id and `deposer`=1 and `type`=1" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat1=$req->fetch();
    $etat=$etat+$etat1['prixf'];
    $req->closeCursor();
    
    return $etat;
}
function reste($prix,$marge){
    $etat=$prix*$marge/100;
    
    return $etat;
}
function affiche($date){
     global $bdd;
    $req=$bdd->prepare("SELECT * ,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_expediteur` having DATEONLY >=:date  and id not in (select id_annonce from `reserver` where `type`=0 )");
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
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `reserver`,`annonce_prestataire`,`exp` where exp.id=reserver.id_res and id_annonce=annonce_prestataire.id and type=1 and id_user=:id and date_attribuer is null      having DATEONLY >=:date ");
    $req->bindParam(':date',$date,PDO::PARAM_STR);
     $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function reserver($id,$id_user,$nom,$matricul){
    global $bdd;
    $req=$bdd->prepare("INSERT INTO `reserver`( `id_annonce`, `id_res`, `type`, `nom_chauffeur`, `matricul`) VALUES (:id,:id_user,0,:nom,:matricul)");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->bindParam(':id_user',$id_user,PDO::PARAM_STR);
    $req->bindParam(':nom',$nom,PDO::PARAM_STR);
    $req->bindParam(':matricul',$matricul,PDO::PARAM_STR);
    $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function confirmer($id,$nom,$matricul){
 global $bdd;
    $req=$bdd->prepare("UPDATE `reserver` set `nom_chauffeur`=:nom , `matricul`=:matricul , `date_attribuer`=now() where `id`=:id");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->bindParam(':nom',$nom,PDO::PARAM_STR);
    $req->bindParam(':matricul',$matricul,PDO::PARAM_STR);
    print_r($bdd->errorInfo());
     $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function deposer($id){
   global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` WHERE `id_user`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function terminer($id,$date){
     global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` WHERE `id_user`=:id having DATEONLY>:date");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
      $req->bindParam(':date',$date,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function nonpayer($id){
     global $bdd;
    $req=$bdd->prepare("(SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` WHERE `id_user`=:id and id in (select id_annonce from `reserver` where `type`=1 and payer= 0 and deposer=1))");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    
    
$req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_expediteur`,`reserver` where id_annonce=annonce_expediteur.id and type=0 and id_user=:id and deposer=1 and payer=0  ");
         $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat1=$req->fetchAll();
     $req->closeCursor();
$etat = array_merge($etat, $etat1);
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

