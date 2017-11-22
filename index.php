<?php
try {
//Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=Test1;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur:'.$e->getMessage());
}

 ?>
