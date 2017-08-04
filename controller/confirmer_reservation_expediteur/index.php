<?php
session_start();
if($_SESSION['type']==2){
    include_once('Model/expediteur/espace.php  ');
    if(isset($_POST['annonce'])){
        annuler($_POST['annonce']);

        
    }

    if(!isset($_POST['numero'])){
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    $reserver=reservation($date,$_SESSION['id']);
        
include_once('Vue/confirmer_reservation_expediteur/index.php');
}
else{
    $etat=confirmer($_POST['id_annonce'],$_POST['numero'],$_POST['adresse']);
    if($etat){
        
                  echo "<script>
alert('confirmation terminer');
window.location.href='confirmer_reservation_expediteur.php';
</script>";
    }
    else{
        
                          echo "<script>
alert('erreur re essayer svp');
window.location.href='confirmer_reservation_expediteur.php';
</script>";
    }

}

}
else{
    session_destroy();
    header("location:login_expediteur.php");
}
