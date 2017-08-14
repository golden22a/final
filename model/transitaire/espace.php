<?php

function annonce($id){
   global $bdd;
    $req=$bdd->prepare("SELECT count(id_user) as nombre FROM `annonce_prestataire` WHERE `id_user`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $etat=$etat['nombre'];
    $req->closeCursor();
    return $etat;
}

function annonce_terminer($id){
   global $bdd;
    $req=$bdd->prepare("SELECT count(id_res) as nombre FROM `reserver` WHERE `id_res`=:id and `deposer`=1 and `type`=0" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
     $req->closeCursor();
    $etat=$etat['nombre'];
     $req=$bdd->prepare("SELECT count(annonce_prestataire.id_user) as nombre FROM `reserver`,`annonce_prestataire` WHERE `id_user`=:id and `id_annonce`=annonce_prestataire.id and `deposer`=1 and `type`=1" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat1=$req->fetch();
    $req->closeCursor();
     $etat=$etat+$etat1['nombre'];
    return $etat;
}


function chiffre($id){
   global $bdd;
    $req=$bdd->prepare("SELECT sum(prix) as prixf FROM `reserver`,`annonce_expediteur` WHERE `id_res`=:id  and `id_annonce`=annonce_expediteur.id and `deposer`=1 and `type`=0" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat=$req->fetch();
    $req->closeCursor();
     $etat=$etat['prixf'];
      $req=$bdd->prepare("SELECT sum(prix) as prixf FROM `reserver`,`annonce_prestataire` WHERE `id_user`=:id  and `id_annonce`=annonce_prestataire.id and `deposer`=1 and `type`=1" );
  $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $etat1=$req->fetch();
    $etat=$etat+$etat1['prixf'];
    $req->closeCursor();
    
    return $etat;
}
function reste($prix,$marge){
    $etat=$prix*$marge/100;
    
    return $etat;
}
function affiche($date){
     global $bdd;
    $req=$bdd->prepare("SELECT * ,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_expediteur` having DATEONLY >=:date  and id not in (select id_annonce from `reserver` where `type`=0 )");
    $req->bindParam(':date',$date,PDO::PARAM_STR);
     $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    
    return $etat;
}
function reservation($date,$id){
     global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `reserver`,`annonce_prestataire`,`exp` where exp.id=reserver.id_res and id_annonce=annonce_prestataire.id and type=1 and id_user=:id and date_attribuer is null      having DATEONLY >=:date ");
    $req->bindParam(':date',$date,PDO::PARAM_STR);
     $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function reserver($id,$id_user,$nom,$matricul){
    global $bdd;
    $req=$bdd->prepare("INSERT INTO `reserver`( `id_annonce`, `id_res`, `type`, `nom_chauffeur`, `matricul`) VALUES (:id,:id_user,0,:nom,:matricul)");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->bindParam(':id_user',$id_user,PDO::PARAM_STR);
    $req->bindParam(':nom',$nom,PDO::PARAM_STR);
    $req->bindParam(':matricul',$matricul,PDO::PARAM_STR);
    $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function confirmer($id,$nom,$matricul){
 global $bdd;
    $req=$bdd->prepare("UPDATE `reserver` set `nom_chauffeur`=:nom , `matricul`=:matricul , `date_attribuer`=now() where `id`=:id");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
     $req->bindParam(':nom',$nom,PDO::PARAM_STR);
    $req->bindParam(':matricul',$matricul,PDO::PARAM_STR);
    print_r($bdd->errorInfo());
     $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function deposer($id){
   global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` WHERE `id_user`=:id");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function terminer($id,$date){
     global $bdd;
    $req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` WHERE `id_user`=:id having DATEONLY>:date");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
      $req->bindParam(':date',$date,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    return $etat;
}
function nonpayer($id){
     global $bdd;
    $req=$bdd->prepare("(SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_prestataire` WHERE `id_user`=:id and id in (select id_annonce from `reserver` where `type`=1 and payer= 0 and deposer=1))");
  $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat=$req->fetchAll();
     $req->closeCursor();
    
    
$req=$bdd->prepare("SELECT *,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `annonce_expediteur`,`reserver` where id_annonce=annonce_expediteur.id and type=0 and id_user=:id and deposer=1 and payer=0  ");
         $req->bindParam(':id',$id,PDO::PARAM_STR);
   $req->execute();
    $etat1=$req->fetchAll();
     $req->closeCursor();
$etat = array_merge($etat, $etat1);
    return $etat;
}
function annuler($id){
 global $bdd;
    $req=$bdd->prepare("delete from `reserver`  where `id`=:id");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
     $etat=$req->execute();
    $req->closeCursor();
    return $etat;
}
function pdf($id,$date){
     global $bdd;
    $req=$bdd->prepare("SELECT prestataire.Nom_entreprise as nomp,prestataire.Registre_commerce as registrep,prestataire.Telephone_use as numerop,exp.Nom_entreprise as nome,exp.Registre_commerce as registree,exp.Telephone_use as numeroe,reserver.*,annonce_prestataire.*,DATE_FORMAT(date, '%Y-%m-%d') DATEONLY, 
       DATE_FORMAT(date,'%H:%i:%s') TIMEONLY,DATE_FORMAT(datea, '%Y-%m-%d') DATEONLYA, 
       DATE_FORMAT(datea,'%H:%i:%s') TIMEONLYA FROM `reserver`,`annonce_prestataire`,`exp`,`prestataire` where exp.id=reserver.id_res and id_annonce=annonce_prestataire.id                                               and reserver.id=:id ");
    $req->bindParam(':id',$id,PDO::PARAM_STR);
    $req->execute();
    $ss=$req->fetch();
    $ref='CAPX'.$ss['id_annonce'];
    $adressee=$ss['adresse_entrepot'];
    
   require_once('Model/tcpdf/tcpdf.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('brilog');
$pdf->SetTitle('brilog reconnaisance');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT,15, PDF_MARGIN_RIGHT);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));



$tabul="                                                                            ";
$numc = "Numéro de confirmation   :    ".$ref;
// Set some content to print

$pdf->Write(0, $date.$tabul.$numc, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('dejavusans', 'B', 20, '', true);

$chai="
Confirmation de commande 
Order Aknowlegement

";


$pdf->Write(0,$chai , '', 0, 'C', true, 0, false, false, 0);
//$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Image('brilog.png', '', '',30 ,45, 'PNG','' , 'C', true, 300, 'C', false, false,0, false, false, false);




$chai="











Première plateforme de mise en relation entre
prestataires logistique et expéditeurs ";

$pdf->SetFont('dejavusans', '', 10, '', true);


$pdf->Write(0,$chai , '', 0, 'C', true, 0, false, false, 0);




$left_column = '<br><br><br><br><b><u>Nom du client final (expéditeur)</u></b><br><br>'.$ss['nome'].',<br>'.$ss['registree'].'<br>'.$ss['adresse_entrepot'].'numero:'.$ss['numero_entrepot'].'<br>'.$ss['numeroe'].'';


$right_column = '<br><br><br><br><b><u>Nom du prestataire logistique </u></b><br><br>'.$ss['nomp'].'<br>'.$ss['registrep'].' <br>'.$ss['numerop'].'';

$y = $pdf->getY();


$pdf->writeHTMLCell(80, '', 30, $y, $left_column, 0, 0, 1, true, 'L', true);
$pdf->writeHTMLCell(80, '', '', '', $right_column, 0, 1, 1, true, 'L', true);



$pdf->SetMargins(22,15, PDF_MARGIN_RIGHT);

$text = "


Votre prestataire logistique confirme votre commande, il se présentera conformément aux informations ci-dessous :

";
$pdf->Write(0,$text , '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('dejavusans', '', 9, '', true);

    
$html= '

<table border="1" cellpadding= "4" style="text-align:left">
<thead>
<tr>
<td width="14%">Ville de départ</td>
<td width="14%">Date de départ </td>
<td width="14%">Ville d’arrivée</td>
<td width="14%">Date d’arrivée </td>
<td width="14%">types de camion</td>
<td width="25%">Poids estimé de la marchandise (ou poids des camions needed)</td>
</tr>
</thead>
<tbody>
<tr>
<td width="14%">'.$ss["wilaya_d"].' '.$ss["commune_d"].' '.$ss["rue_d"].'</td>
<td width="14%">'.$ss["date"].'</td>
<td width="14%">'.$ss["wilaya_a"].' '.$ss["commune_a"].' '.$ss["rue_a"].'</td>
<td width="14%">'.$ss["datea"].'</td>
<td width="14%">'.$ss["type_camion"].'</td>
<td width="25%">'.$ss["tonage"].'</td>
</tr></tbody>
</table>

';
    
  $pdf->writeHTML($html, true, false, true, false, 'R');
  

$html='<br><br>
<table border="1" width= "100%" cellpadding= "4">
<tr>
<td width= "40%">Identifiant de la flotte ou du camion :</td>
<td width= "60%">'.$ss['matricule'].' </td>
</tr>
<tr>
<td width= "40%">Nom complet du chauffeur :</td>
<td width= "60%">'.$ss['nom_chauffeur'].' </td>
</tr>
</table>
';
    
      $pdf->writeHTML($html, true, false, true, false, 'R');

    
    $left_column = '<br><br>Signature du prestataire logistique   ';


$right_column = '<br><br>Signature du client final et cachet ';
    



$pdf->writeHTMLCell(100, '', 30, $y+140, $left_column, 0, 0, 1, true, 'L', true);
$pdf->writeHTMLCell(80, '', '', '', $right_column, 0, 1, 1, true, 'L', true);
    // This method has several options, check the source code documentation for more information.
    ob_end_clean();
   
$pdf->Output($ref.'.pdf', 'F');
}
    
    
    
    
    
    
    
    


