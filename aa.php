<?php
$bdd = new PDO('mysql:host=localhost;dbname=ocamion','root','');
$req=$bdd->prepare("SELECT prestataire.Nom_entreprise as nomp,prestataire.Registre_commerce as registrep,prestataire.Telephone_use as numerop,exp.Nom_entreprise as nome,exp.Registre_commerce as registree,exp.Telephone_use as numeroe,reserver.*,annonce_prestataire.*,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `reserver`,`annonce_prestataire`,`exp`,`prestataire` where exp.id=reserver.id_res and id_annonce=annonce_prestataire.id                                               and reserver.id=3 ");

 $req->execute();
print_r($req->errorInfo());
    $etat=$req->fetch();
var_dump($etat);
$output = array_chunk($etat, 19, true);
var_dump($output);
?>