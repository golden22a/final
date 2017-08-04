<?php
session_start();
session_destroy();
include_once('wilayas.php');
include_once('communes.php');
if(!isset($_POST['nom_entreprise']))
include_once('Vue/signup_expediteur/index.php');
else{
    include_once('Model/expediteur/register.php');
$ss=insert_pres($_POST['nom_entreprise'],$_POST['nom_user'],$_POST['registre'],$_POST['rue'],$_POST['communed'],$_POST['wilayad'],$_POST['email_user'],$_POST['telephone_user'],$_POST['username'],$_POST['pwd']);
    if($ss)
        echo "<script>
alert('inscription reussit vous receverz un email de confirmation');
window.location.href='index.php';
</script>";else
       echo "<script>
alert('Erreur Re essayez Svp');
window.location.href='signup_expediteur.php';
</script>";
        
}
