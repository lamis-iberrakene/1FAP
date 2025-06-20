<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Archéo-IT - Chantiers</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>


  <header class="site-header">
    <div class="container header-inner">
      <div class="logo">Archéo-IT</div>
      <ul class="nav-list">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="chantiers.php">Chantiers</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="deconnexion.php">Déconnexion</a></li>
        <?php else: ?>
          <li><a href="inscription.php">Inscription</a></li>
          <li><a href="connexion.php">Connexion</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </header>

  <!-- Section principale -->
  <main class="container">
    <h1>Nos derniers chantiers archéologiques</h1>

    <section class="chantiers">

      <!-- ARTICLE 1 -->
      <div class="chantier">
        <img src="images/Bibrace2.jpg" alt="Ruine Bibracte">
        <div class="chantier-content">
          <h2>Bibracte ... une ville gauloise </h2>
          <p><strong>Lieu :</strong> Bourgogne-Franche-Comté ,France </p>
          <p><strong>Dates :</strong> Juin - Juillet 2024</p>
          <p>Découvrez Bibracte, capitale gauloise exceptionnelle, nichée au cœur du massif du Morvan. Partez à la découverte des vestiges de cette cité antique, seul ou avec un guide, et immergez-vous dans l'histoire de la Gaule romaine</p>
        </div>
      </div>

      <!-- ARTICLE 2 -->
      <div class="chantier">
        <img src="images/Roche de solutré.jpg" alt="  ">
        <div class="chantier-content">
          <h2>La Roche de Solutré</h2>
          <p><strong>Lieu :</strong> Solutré-Pouilly, France</p>
          <p><strong>Dates :</strong> Depuis 2022</p>
          <p>Ce site emblématique du Paléolithique supérieur a révélé d'importants vestiges préhistoriques. Découvert en 1866, il a donné son nom à la civilisation solutréenne grâce à la richesse de ses outils en silex et restes fauniques retrouvés au pied de l'éperon calcaire.</p>
      </div>

      <!-- ARTICLE 3 -->
      <div class="chantier">
        <img src="images/Berry au bac.jpg" alt="Chantier ">
        <div class="chantier-content">
          <h2>Berry-au-Bac, France</h2>
          <p><strong>Lieu :</strong>Berry-au-Bac, France</p>
          <p><strong>Dates :</strong> 2024</p>
          <p> Site archéologique majeur de l'Aisne a livré des vestiges allant du Mésolithique à l'époque médiévale. La parcelle fouillée en 2024 se situe à proximité de zones riches en découvertes révélées dès les années 1960 par prospections et fouilles du CNRS.</p>
        </div>
      </div>

      <!-- ARTICLE 4 -->
      <div class="chantier">
        <img src="images/le mont castel.jpg" alt="Chantier ">
        <div class="chantier-content">
          <h2>Le Mont Castel (Calvados)</h2>
          <p><strong>Lieu :</strong> Calvados, Normandie, France</p>
          <p><strong>Dates :</strong> Avril 2025</p>
          <p>Dominant Port-en-Bessin, le Mont Castel livre depuis 2014 des traces d'occupations allant du Bronze final à l'époque romaine. Les fouilles ont mis au jour un ancien site militaire actif à la fin de la guerre des Gaules, avant la fondation de Bayeux</p>
        </div>
      </div>

      <!-- ARTICLE 5 -->
      <div class="chantier">
        <img src="images/grotte chauvet2.jpg" alt="grotte chauvet2">
        <div class="chantier-content">
          <h2>La Grotte Chauvet 2</h2>
          <p><strong>Lieu :</strong> Auvergne-Rhones-Alpes , Ardeche , France </p>
          <p><strong>Dates :</strong> octobre 2023</p>
          <p>Ardèche est un site boisé de 15 hectares comprenant la restitution de la Grotte Chauvet ainsi que plusieurs espaces qui vous permettront de découvrir la Préhistoire de manière ludique et immersive. Une occasion exceptionnelle de découvrir le Paléolithique et l'histoire du 1er grand chef-d'œuvre de l'humanité !</p>
        </div>
      </div>



    </section>
  </main>


  <footer class="site-footer">
    <p>&copy; 2025 Archéo-IT. Tous droits réservés.</p>
  </footer>

</body>
</html>
