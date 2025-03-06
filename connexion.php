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
  <link rel="stylesheet" href="./css/connexion.css">
  <title>Gmail: une messagerie sécurisée, intelligente et facile à utiliser</title>
</head>
<body>
  <!-- header of my page -->
  <header>
    <figure>
      <a href="./index.php"><img src="./asset/mail.png" alt="Gmail logo" title="Google Gmail"></a>
      <figcaption hidden>Logo Gmail</figcaption>
    </figure>
    <h1><a href="./index.php">Gmail</a></h1>
    <nav>
      <ul>
        <li><a href="#">POUR LES PROS</a></li>
        <li class="create-account-button"><a href="#">CONNEXION</a></li>
        <li><a href="./index.php#form-down">CREER UN COMPTE</a></li>
      </ul>
    </nav>
  </header>
  <!-- Main of my page -->
  <main>
    <!-- Section form -->
    <section class="section-form" id="form-down">
      <h2>Bienvenue dans votre espace</h2>
      <form action="" method="post">
        <fieldset>
          <legend>Connectez-vous à votre compte</legend>
          <label for="email">Mail ou login *</label><br>
          <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required><br>
          <label for="mot_de_passe">Mot de passe *</label><br>
          <input type="password" id="pwd" name="pwd" required><br>
          <button type="submit">CONNEXION A VOTRE COMPTE</button>
        </fieldset>

      </form>
    </section>
  </main>
  <!-- Footer of my page -->
  <footer>

  </footer>
</body>
</html>