<?php
function login($username,$pwd){
   global $bdd;
    $pwd=sha1($pwd);
    $req=$bdd->prepare("SELECT id,Nom_entreprise,Nom_user,Email_user,marge FROM `prestataire` WHERE `username`=:username AND `pwd`=:pwd and ver=1");
  $req->bindParam(':username',$username,PDO::PARAM_STR);
    $req->bindParam(':pwd',$pwd,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $req->closeCursor();
    return $etat;
}