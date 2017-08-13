<?php
session_start();
if($_SESSION['type']==1){
    include_once('Model/transitaire/param.php  ');
    if(isset($_POST['pwn'])){

  
        
            $etat=changeinfouser($_SESSION['id'],$_POST['pwd'],$_POST['pwn']);
    if($etat){
        
                   echo "<script>
alert('Password succesfully changed ');
window.location.href='espace_transitaire.php';
</script>";
}  else
                           echo "<script>
alert('Mot de pass incorrect ');
window.location.href='param.php';
</script>";
} 
 elseif(isset($_POST['mail'])){
     
               $etat=changeMail($_SESSION['id'],$_POST['mail']);
    if($etat){
        
                   echo "<script>
alert('email succesfully changed ');
window.location.href='espace_transitaire.php';
</script>";
}  else
                           echo "<script>
alert('erreur ! ');
window.location.href='param.php';
</script>";
 }
    
    
    elseif(isset($_POST['ph'])){
     
               $etat=changePhone($_SESSION['id'],$_POST['ph']);
    if($etat){
        
                   echo "<script>
alert('Phone succesfully changed ');
window.location.href='espace_transitaire.php';
</script>";
}  else
                           echo "<script>
alert('erreur ! ');
window.location.href='param.php';
</script>";
 }    
else{

    $etat=getInfoUser($_SESSION['id']);

        $nomm_en = $etat['Nom_entreprise'];
        $nomm_ut =  $etat['Nom_user'];
        $reg =  $etat['Registre_commerce'];
        $rue =  $etat['Rue'];
        $commun=  $etat['Commun'];
        $wilaya=  $etat['Wilaya'];
        $email =  $etat['Email_gerant'];
        $telephone =  $etat['Telephone_gerant'];

        date_default_timezone_set('Africa/Algiers');
$date=date("Y-m-d");
$time=date("H:i");
  
include_once('Vue/param/index.php');

      
    }
}
       
       else{
    session_destroy();
    header("location:login_transitaire.php");}
