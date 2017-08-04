<?php
session_start();
if($_SESSION['type']==1){
    include_once('Model/transitaire/espace.php  ');
    if(!isset($_POST['cf_name'])){
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    $affiche=affiche($date);
include_once('Vue/recherche_avancer_transitaire/index.php');
}
else {
    $etat=reserver($_POST['id_annonce'],$_SESSION['id'],$_POST['cf_name'],$_POST['matricul']);
    if($etat){
        
                  echo "<script>
alert('reservation ajouter vous reserverez un email lors de la confirmation de lexpediteur');
window.location.href='espace_transitaire.php';
</script>";
    }
    else{
        
                          echo "<script>
alert('erreur re essayer svp');
window.location.href='recherche_avancer_transitaire.php';
</script>";
    }
}
}
else{
    session_destroy();
    header("location:login_transitaire.php");}
