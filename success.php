<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles2.css" />
    <title>Inscription réussie – Archéo-IT</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap"
      rel="stylesheet"
    />
    <style>
      .success-message {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 600;
        color: #2ecc71;
        margin-top: 100px;
        animation: fadeIn 1.5s ease-in-out;
      }

      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
      }
    </style>
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

    <!-- Message à afficher -->
    <main class="container" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
      <div id="messageContainer"></div>
    </main>

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

    <!-- Ton script JS externe -->
    <script src="success.js"></script>
  </body>
</html>
