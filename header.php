<?php

require_once "class/config.php";

if (isset($_SESSION['id'])) {

    $connexionbdd = $bdd->connectDb();

    $ssid = $_SESSION['id'];
    $recupid = $connexionbdd->prepare("SELECT * FROM utilisateurs WHERE id ='$ssid'");
    $recupid->execute();
    $results = $recupid->fetch(PDO::FETCH_ASSOC);

    
}


?>

<div class="nav">
<ul>
  <li><a href="index.php">Accueil</a></li>
  <li><a href="connexion.php">Connexion</a></li>
  <li><a href="inscription.php">Inscription</a></li>
  <!-- <li><a href="about.asp">About</a></li> -->
</ul>
</div>