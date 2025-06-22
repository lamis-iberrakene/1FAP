<?php
$password = shell_exec("python3 /var/www/html/1FAP/script_mdp.py 3 ");

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles2.css" />
    <title>Inscription – Archéo-IT</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Header -->
    <header class="site-header" id="header">
      <div class="container header-inner">
        <h1 class="logo">Archéo-IT</h1>
        <nav>
          <ul class="nav-list">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="index.html#features">Fonctionnalités</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="chantier.php">Chantiers de fouille</a></li>
            <li><a href="login.html" class="btn-signup">Se connecter</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Formulaire -->
    <section id="formulaire" class="container" style="padding-top: 100px">
      <h2 class="animate-on-scroll">Formulaire d'enregistrement</h2>
      <form action="register.php" method="post" class="full-form">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" placeholder="Votre nom" required class="form-control" />
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required class="form-control" />
        </div>
        <div class="form-group">
          <label for="age">Âge</label>
          <input type="number" id="age" name="age" placeholder="Votre âge" min="0" required class="form-control" />
        </div>
        <div class="form-group">
          <label for="sexe">Sexe</label>
          <select id="sexe" name="sexe" required class="form-control">
            <option value="">Sélectionnez</option>
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
            <option value="autre">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" required class="form-control" />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Votre email" required class="form-control" />
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password);?>" placeholder="Mot de passe" required class="form-control" />
           <button type="button" onclick="togglePassword()">👁️</button> 
       </div>
        <script>
function togglePassword() {
  const input = document.getElementById("password");
  input.type = input.type === "password" ? "text" : "password";
}
</script>
        <button type="submit" class="btn-primary">Valider</button>
      </form>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <p>© 2025 Archéo-IT. Tous droits réservés.</p>
        <ul class="social-list">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
