<?php 
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

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


$date="vendredi 12 mai 2017";
$tabul="                                                              ";
$numc = "Numéro de confirmation :";
// Set some content to print

$pdf->Write(0, $date.$tabul.$numc, '', 0, 'L', true, 0, false, false, 0);
$ref_a=" #ref de l’annonce_#ref du client final_F";
$pdf->Write(0, $ref_a, '', 0, 'R', true, 0, false, false, 0);

$pdf->SetFont('dejavusans', 'B', 20, '', true);

$chai="
Confirmation de commande 
Order Aknowlegement";


$pdf->Write(0,$chai , '', 0, 'C', true, 0, false, false, 0);
//$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Image('brilog.png', '', '',65 ,40, 'PNG','' , 'C', true, 300, 'C', false, false,0, false, false, false);




$chai="








Première plateforme de mise en relation entre
prestataires logistique et expéditeurs ";

$pdf->SetFont('dejavusans', '', 10, '', true);


$pdf->Write(0,$chai , '', 0, 'C', true, 0, false, false, 0);




$left_column = '<br><br><br><br><b><u>Nom du client final (expéditeur)</u></b><br><br>#Nom de l’entreprise,<br>#Registre de commerce<br> Adresse de l’entrepôt.<br>Numéro de téléphone du gérant de   l’entrepôt  ';


$right_column = '<br><br><br><br><b><u>Nom du prestataire logistique </u></b><br><br>#Nom de l’entreprise du 3.P.L,<br>#Registre de commerce <br>#Numéro de téléphone du responsable du compte mis sur la plateforme BrilLog';

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
<td width="17%">Description rapide de la prestation  </td>
<td width="12%">Ville de départ</td>
<td width="12%">Date de départ </td>
<td width="12%">Ville d’arrivée</td>
<td width="12%">Date d’arrivée </td>
<td width="12%">types de camion</td>
<td width="23%">Poids estimé de la marchandise (ou poids des camions needed)</td>
</tr>
</thead>
<tbody>
<tr>
<td width="17%">bloom</td>
<td width="12%">bloom</td>
<td width="12%">bloom</td>
<td width="12%">bloom</td>
<td width="12%">bloom</td>
<td width="12%">bloom</td>
<td width="23%">bloom</td>
</tr></tbody>
</table>

';
    
  $pdf->writeHTML($html, true, false, true, false, 'R');
  

$html='<br><br>
<table border="1" width= "100%" cellpadding= "4">
<tr>
<td width= "40%">Identifiant de la flotte ou du camion :</td>
<td width= "60%">Matricules </td>
</tr>
<tr>
<td width= "40%">Nom complet du chauffeur : *</td>
<td width= "60%">Nom </td>
</tr>
</table>
';
    
      $pdf->writeHTML($html, true, false, true, false, 'R');

    
    $left_column = '<br><br>Signature électronique  <br>du prestataire logistique   ';


$right_column = '<br><br>Signature du client final et cachet ';
    



$pdf->writeHTMLCell(100, '', 30, $y+140, $left_column, 0, 0, 1, true, 'L', true);
$pdf->writeHTMLCell(80, '', '', '', $right_column, 0, 1, 1, true, 'L', true);
    
    // This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');
    
