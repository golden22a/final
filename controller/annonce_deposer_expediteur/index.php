<?php
session_start();
if($_SESSION['type']==2){
    include_once('Model/expediteur/espace.php  ');
    $affiche=deposer($_SESSION['id']);
include_once('Vue/annonce_deposer_expediteur/index.php');
}
else{
    session_destroy();
    header("location:login_transitaire.php");}
