<?php
session_start();
if($_SESSION['type']==1){
include_once('Model/transitaire/espace.php  ');
    if(isset($_POST['annonce'])){
        annuler($_POST['annonce']);

        
    }
    if(!isset($_POST['cf_name'])){
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    $reserver=reservation($date,$_SESSION['id']);
        
include_once('Vue/confirmer_reservation_transitaire/index.php');
}
else{
    $etat=confirmer($_POST['id_annonce'],$_POST['cf_name'],$_POST['matricul']);
    if($etat){
          date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
    pdf($_POST['id_annonce'],$date);
<<<<<<< HEAD
<<<<<<< HEAD
                  echo "<script>
alert('confirmation terminer');
window.location.href='confirmer_reservation_transitaire.php';
</script>";
=======
>>>>>>> halim
=======
>>>>>>> halim
    }
    else{
        
                          echo "<script>
alert('erreur re essayer svp');
window.location.href='confirmer_reservation_transitaire.php';
</script>";
    }

}

}
else{
    session_destroy();
    header("location:login_transitaire.php");
}
