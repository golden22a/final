<?php
session_start();
if($_SESSION['type']==2){
include_once('wilayas.php');
include_once('communes.php');
if(!isset($_POST['wilayad']))
include_once('Vue/depo_expediteur/index.php');
else{
    include_once('Model/expediteur/inset_expedition.php');
   $ss=insert_exp($_POST['wilayad'],$_POST['communed'],$_POST['rued'],$_POST['wilayaa'],$_POST['communea'],$_POST['ruea'],$_POST['dated_submit'],$_POST['timed_submit'],$_POST['datea_submit'],$_POST['timea_submit'],$_POST['type'],$_POST['tonage'],$_POST['prix'],$_SESSION['id']);
    if($ss)
        echo "<script>
alert('Annonce Ajouter avec succes');
window.location.href='espace_expediteur.php';
</script>";else
       echo "<script>
alert('Erreur Re essayez Svp');
window.location.href='expo.php';
</script>";
        
}
}else{
    session_destroy();
    header("location:login_expediteur.php");}