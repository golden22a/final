<?php
session_start();
include_once('wilayas.php');
include_once('communes.php');
if($_SESSION['type']==1){
if(!isset($_POST['wilayad']))
include_once('Vue/depo_transitaire/index.php');
else{
    include_once('Model/transitaire/inset_transition.php');
   $ss=insert_exp($_POST['wilayad'],$_POST['communed'],$_POST['rued'],$_POST['wilayaa'],$_POST['communea'],$_POST['ruea'],$_POST['dated_submit'],$_POST['timed_submit'],$_POST['datea_submit'],$_POST['timea_submit'],$_POST['type'],$_POST['tonage'],$_POST['prix'],$_SESSION['id']);
    if($ss)
        echo "<script>
alert('Annonce Ajoutée avec succès, elle apparaitra sur l\'espace expéditeurs');
window.location.href='espace_transitaire.php';
</script>";else
       echo "<script>
alert('Erreur Re essayez Svp');
window.location.href='depo.php';
</script>";
}
        
}else{
    session_destroy();
header("location:login_transitaire.php");}