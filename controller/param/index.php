<?php
session_start();
if($_SESSION['type']==1){
include_once('Model/transitaire/param.php  ');

    $etat=getInfoUser($_SESSION['id']);

        $nomm_en = $etat['Nom_entreprise'];
        $nomm_ut =  $etat['Nom_user'];
        $reg =  $etat['Registre_commerce'];
        $rue =  $etat['Rue'];
        $commun=  $etat['Commun'];
        $wilaya=  $etat['Wilaya'];
        $email =  $etat['Email_gerant'];
        $telephone =  $etat['Telephone_gerant'];
        $password =  $etat['pwd'];
        
        date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
$time=date("H:i");
  
include_once('Vue/param/index.php');

}else{
    session_destroy();
    header("location:login_transitaire.php");}
