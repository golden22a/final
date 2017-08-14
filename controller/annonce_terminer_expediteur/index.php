<?php
session_start();
if($_SESSION['type']==2){
    include_once('Model/expediteur/espace.php  ');
    $affiche=terminer_reserver($_SESSION['id']);
     $affiche1=terminer($_SESSION['id']);
include_once('Vue/annonce_terminer_expediteur/index.php');
}
else{
    session_destroy();
    header("location:login_expediteur.php");}
