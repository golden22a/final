<?php
session_start();
if($_SESSION['type']==1){
    include_once('Model/transitaire/espace.php  ');
    $affiche=nonpayer($_SESSION['id']);
include_once('Vue/annonce_nonpayer_transitaire/index.php');
}
else{
    session_destroy();
    header("location:login_transitaire.php");}
