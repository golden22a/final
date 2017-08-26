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
function changeinfouser($id,$pwd,$pwdn){
     global $bdd;
    $pwd=sha1($pwd);
    $pwdn=sha1($pwdn);
    $req=$bdd->prepare("update `prestataire` set `pwd`=:pwdn   WHERE `id`=:id and `pwd`=:pwd");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->bindParam(':pwd',$pwd,PDO::PARAM_STR);
     $req->bindParam(':pwdn',$pwdn,PDO::PARAM_STR);
    $etat=$req->execute();
    
    return $etat;
    
}

function changeMail($id,$mail){
     global $bdd;

    $req=$bdd->prepare("update `prestataire` set `Email_gerant`=:mail   WHERE `id`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->bindParam(':mail',$mail,PDO::PARAM_STR);
    $etat=$req->execute();
    
    return $etat;
    
}

function changePhone($id,$phone){
     global $bdd;

    $req=$bdd->prepare("update `prestataire` set `Telephone_gerant`=:phone   WHERE `id`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->bindParam(':phone',$phone,PDO::PARAM_STR);
    $etat=$req->execute();
    
    return $etat;
    
}