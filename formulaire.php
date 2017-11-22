  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="form.css">
  <title>Minichat</title>
  </head>
  <body>

  <fieldset>

  <legend>
  Minichat
  </legend>

  <form  action="minichat.php" method="post">

  <p>Pseudo</p>
  <input type="text" name="pseudo" value="<?php echo $_COOKIE['id'];?>" required>

  <p>Message</p>
  <input type="text" name="message" required>
  <br>
  <br>

  <input type="submit" value="Envoyer">

  <?php
  //Connexion à la base de données.
  require('index.php');
  //Affiches tout les valeurs.
  $affichagedesdonnees = $bdd->query('SELECT * FROM mini_chat  LIMIT 0,10');
//On récupère les valeurs de chaque entrée.
  while($data = $affichagedesdonnees->fetch())
  {
    echo'<p><strong>'.strip_tags($data['pseudo']).' : '.strip_tags($data['message']).'</p></strong>';
  }
  //Fin de requête.
  $affichagedesdonnees->closeCursor();
  ?>
  </form>
<a href="formulaire.php">Rafraîchir</a>
<br>
<a href="page.php?page=1">La liste des derniers messages .</a>
  </fieldset>
  </body>
  </html>
