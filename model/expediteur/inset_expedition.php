<?php
function insert_exp($wd,$cd,$rd,$wa,$ca,$ra ,$dated,$timed,$datea,$timea,$type,$tonage,$prix,$id){
   global $bdd;
    global $wilayas;
      global $communes;
    $wd=$wilayas[$wd-1]['nom'];
    $cd=$communes[$cd-1]['nom'];   
    $wa=$wilayas[$wa-1]['nom'];
    $ca=$communes[$ca-1]['nom'];   
    $dated=$dated.' '.$timed;
    $datea=$datea.' '.$timea;
    $req=$bdd->prepare("INSERT INTO `annonce_expediteur`(`date`,`datea`, `wilaya_d`, `commune_d`, `rue_d`, `id_user`, `tonage`, `wilaya_a`, `commune_a`, `rue_a`, `prix`, `type_camion`) VALUES (:date,:datea,:wd,:cd,:rd,:id,:tonage,:wa,:ca,:ra,:prix,:type)");
    $req->bindParam(':wd',$wd,PDO::PARAM_STR);
    $req->bindParam(':wa',$wa,PDO::PARAM_STR); /////// problm a signaler
     $req->bindParam(':cd',$wd,PDO::PARAM_STR);
    $req->bindParam(':ca',$ca,PDO::PARAM_STR);
    $req->bindParam(':ra',$ra,PDO::PARAM_STR);
    $req->bindParam(':rd',$ra,PDO::PARAM_STR);
    $req->bindParam(':da te',$dated,PDO::PARAM_STR);
    $req->bindParam(':datea',$datea,PDO::PARAM_STR);
    $req->bindParam(':type',$type,PDO::PARAM_STR);
    $req->bindParam(':tonage',$tonage,PDO::PARAM_STR);
    $req->bindParam(':prix',$prix,PDO::PARAM_STR);
    $req->bindParam(':id',$id,PDO::PARAM_STR);
    $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}