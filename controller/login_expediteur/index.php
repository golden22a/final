<?php
session_start();
if(!isset($_SESSION['type'])||$_SESSION['type']!=2){
    session_destroy();
if(!isset($_POST['username']))
include_once('Vue/login_expediteur/index.php');
else{
    
   include_once('Model/expediteur/login.php'); 
    $etat=login($_POST['username'],$_POST['password']);
    if($etat){
        session_start();
        $_SESSION['id']=$etat['id'];
         $_SESSION['Nom']=$etat['Nom_entreprise'];
         $_SESSION['user']=$etat['Nom_user'];
        $_SESSION['email']=$etat['Email_user'];
        $_SESSION['type']=2;
   header("location:espace_expediteur.php");}
    else
            echo "<script>
alert('Wrong username or password');
window.location.href='login_expediteur.php';
</script>";
}
}else{
    header("location:espace_expediteur.php");
    
}