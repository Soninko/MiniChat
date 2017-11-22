<?php
//Connexion à la base de données.
require('index.php');
//On crée un cookie qui pré-remplira le pseudo du dernier visiteur qui a entrée son pseudo.
setcookie('id',$_POST['pseudo'],time() + 365*24*3600, null , null , false , true);
// Insère les message entrées grâce aux message reçus via le bouton envoyé.
$requete = $bdd->prepare('INSERT INTO mini_chat (pseudo,message) VALUES(?,?)');
$requete->execute(array($_POST['pseudo'],$_POST['message']));
header('Location:formulaire.php');
 ?>
