<?php
session_start();
if($_SESSION['type']==1){
include_once('Model/transitaire/param.php  ');
   if(isset($_POST['cf_name']))  {
       
   echo "<script>
alert('reservation ajouter vous reserverez un email lors de la confirmation de lexpediteur');
window.location.href='espace_transitaire.php';
</script>";   }
      
    date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
$time=date("H:i");
  
include_once('Vue/param/index.php');

}else{
    session_destroy();
    header("location:login_transitaire.php");}
