<?php
function insert_pres($nom_entreprise,$user,$registre,$rue,$cd,$wd,$email_user,$telephone_user,$username,$pwd){
   global $bdd;
    global $wilayas;
      global $communes;
    $pwd=sha1($pwd);
    $wd=$wilayas[$wd-1]['nom'];
    $cd=$communes[$cd-1]['nom'];      
    $req=$bdd->prepare("INSERT INTO `exp`( `Nom_entreprise`, `Nom_user`, `Registre_commerce`, `Rue`, `Commun`, `Wilaya`, `Email_user`, `Telephone_use`, `username`, `pwd`) VALUES (:ne,:nu,:reg,:rue,:cd,:wd,:eu,:tu,:username,:pwd)");
    $req->bindParam(':ne',$nom_entreprise,PDO::PARAM_STR);
    $req->bindParam(':nu',$user,PDO::PARAM_STR);
    $req->bindParam(':reg',$registre,PDO::PARAM_STR);
    $req->bindParam(':rue',$rue,PDO::PARAM_STR);
     $req->bindParam(':cd',$cd,PDO::PARAM_STR);
    $req->bindParam(':wd',$wd,PDO::PARAM_STR);
    $req->bindParam(':eu',$email_user,PDO::PARAM_STR);
    $req->bindParam(':tu',$telephone_user,PDO::PARAM_STR);
    $req->bindParam(':username',$username,PDO::PARAM_STR);
    $req->bindParam(':pwd',$pwd,PDO::PARAM_STR);
    $etat=$req->execute();
    $req->closeCursor();
     print_r($req->errorInfo());
    return $etat;
}