<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=ocamion','root','');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>