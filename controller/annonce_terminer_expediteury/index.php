<?php
session_start();
if($_SESSION['type']==2){
    include_once('Model/expediteur/espace.php  ');
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    $affiche=terminer($_SESSION['id'],$date);
include_once('Vue/annonce_deposer_expediteur/index.php');
}
else{
    session_destroy();
    header("location:login_expediteur.php");}
