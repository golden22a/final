<?php
session_start();
if($_SESSION['type']==1){
include_once('Model/transitaire/espace.php  ');
  if(isset($_POST['cf_name']))  { //mnin jet cf_name 
    $etat=reserver($_POST['id_annonce'],$_SESSION['id'],$_POST['cf_name'],$_POST['matricul']);
    if($etat){
        
                  echo "<script>
alert('réservation effectuée, en attente de confirmation de l\'expéditeur');
window.location.href='espace_transitaire.php';
</script>";
    }
    else{
        
                          echo "<script>
alert('erreur re essayer svp');
window.location.href='espace_transitaire.php';
</script>";
    }
}
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
$time=date("H:i");
    $nombre=annonce($_SESSION['id']);
    $terminer=annonce_terminer($_SESSION['id']);
$chifre=chiffre($_SESSION['id']);
$reste=reste($chifre,$_SESSION['marge']);
    $affiche=affiche($date);
include_once('Vue/espace_transitaire/index.php');
}
else{
    session_destroy();
    header("location:login_transitaire.php");}
