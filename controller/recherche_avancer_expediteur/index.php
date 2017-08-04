<?php
session_start();
if($_SESSION['type']==2){
    include_once('Model/expediteur/espace.php  ');
    if(!isset($_POST['numero'])){
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    $affiche=affiche($date);
include_once('Vue/recherche_avancer_expediteur/index.php');
}
else {
    $etat=reserver($_POST['id_annonce'],$_SESSION['id'],$_POST['numero'],$_POST['adresse']);
    if($etat){
        
                  echo "<script>
alert('reservation ajouter vous reserverez un email lors de la confirmation de lexpediteur');
window.location.href='espace_expediteur.php';
</script>";
    }
    else{
        
                          echo "<script>
alert('erreur re essayer svp');
window.location.href='recherche_avancer_expediteur.php';
</script>";
    }
}
}
else{
    session_destroy();
    header("location:login_expediteur.php");}
