<?php
session_start();
if($_SESSION['type']==1){
    include_once('Model/transitaire/espace.php  ');
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    $affiche=terminer($_SESSION['id'],$date);
include_once('Vue/annonce_terminer_transitaire/index.php');
}
else{
    session_destroy();
    header("location:login_transitaire.php");}
