<?php
//Connexion à la base de données.
require('index.php');
//Affiche les pseudo et les messages qui commence à partir de l'entrée(ID = 1) jusqu'a l'entrée numéro 10.
$requete = $bdd->query('SELECT pseudo , message FROM mini_chat LIMIT 0 , 10');
//On vérifie si la variable $_GET['page'] existe et si l'entrée saisi est bien un chiffre.
if(isset($_GET['page']) && is_numeric($_GET['page']))
{
  //Permet d'afficher un message d'erreur si des valeurs non entier sont entrée dans l'url.
    $_GET['page'] = (int)$_GET['page'];
    //Si des chiffres entre 1 et 10 sont entrées alors on entre dans la boucle dans le cas contraire rien ne s'affiche en dehors des liens.
    if ($_GET['page'] >= 1 && $_GET['page'] <= 10)
    {
      while($data = $requete->fetch())
      {
          echo'<p><strong>'.strip_tags($data['pseudo']).' : '.strip_tags($data['message']).'</p></strong>';
      }
    }
 ?>
<a href="formulaire.php">Pour revenir sur le mini-chat .</a>
<br>
<a href="page.php?page=1">Rafraichir</a>
 <?php

}
else {
  echo "Veuillez entre un chiffre entre 1 et 10 !";
}
//Fin de requête.
$requete->closeCursor();
  ?>
