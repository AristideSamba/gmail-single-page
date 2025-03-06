<?php
include_once __DIR__."/controller/baseControleur.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
  <link rel="manifest" href="./favicon/site.webmanifest">
  <link rel="stylesheet" href="./css/theme.css">
  <title>Gmail: une messagerie sécurisée, intelligente et facile à utiliser</title>
</head>
<body>
  <!-- header of my page -->
  <header>
    <figure>
      <a href="#"><img src="./asset/mail.png" alt="Gmail logo" title="Google Gmail"></a>
      <figcaption hidden>Logo Gmail</figcaption>
    </figure>
    <h1><a href="#">Gmail</a></h1>
    <nav>
      <ul>
        <li><a href="#">POUR LES PROS</a></li>
        <li><a href="connexion.php">CONNEXION</a></li>
        <li class="create-account-button"><a href="#form-down">CREER UN COMPTE</a></li>
      </ul>
    </nav>
  </header>
  <!-- Main of my page -->
  <main>
    <!-- Section home -->
    <section class="section-home">
      <p>Retrouvez la fluidité et la <br> simplicité de Gmail sur <br> vos appareils </p>
      <a href="#form-down" class="boutton">Créer un compte</a>
      <figure>
        <figcaption hidden>Image vers le bas</figcaption>
        <a href="#form-down">
          <img src="./asset/arrow.png" alt="">
        </a>
      </figure>
    </section>
    <!-- Section form -->
    <section class="section-form" id="form-down">
      <h2>Une boite de réception entièrement repensée</h2>
      <p>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaiter lire en priorité</p>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <fieldset>
          <legend>Créer un compte</legend>
          <label for="nom">Nom *</label><br>
          <input type="text" id="nom" name="nom" placeholder="Votre nom" required><br>
          <label for="prenom">Prénom *</label><br>
          <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required><br>
          <label for="email">Mail *</label><br>
          <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required><br>
          <label for="mot_de_passe">Choisissez votre mot de passe *</label><br>
          <input type="password" id="pwd" name="pwd" required><br>
          <button type="submit">VALIDEZ VOTRE COMPTE</button>
        </fieldset>

      </form>
    </section>
  </main>
  <!-- Footer of my page -->
  <footer>

  </footer>
</body>
</html>