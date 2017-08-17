<?php
session_start();
if($_SESSION['type']==2){
     date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
$time=date("H:i");
include_once('Model/expediteur/espace.php  ');
   if(isset($_POST['numero'])) {
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
window.location.href='espace_expediteur.php';
</script>";
    }
}else if (isset($_GET['annonce'])){
       pdf_proforma($_GET['annonce'],$date);
   }
   
    $nombre=annonce($_SESSION['id']);
    $terminer=annonce_terminer($_SESSION['id']);
    $affiche=affiche($date);
include_once('Vue/espace_expediteur/index.php');
}
else{
    session_destroy();
    header("location:login_expediteur.php");}
