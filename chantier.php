<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Archéo-IT – Explorez l’Histoire</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap"
      rel="stylesheet"
    />
    <style>
      /* Base & Variables */
      :root {
        --color-primary: #1a1a1a;
        --color-secondary: #ffffff;
        --color-accent: #e63946;
        --font-base: "Poppins", sans-serif;
      }
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: var(--font-base);
        color: var(--color-primary);
        background: var(--color-secondary);
        line-height: 1.6;
      }
      .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 0;
      }

      /* Header */
      .site-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 1rem 0;
        z-index: 100;
        background: transparent;
        transition: background 0.3s ease;
      }
      .site-header.scrolled {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }
      .header-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .logo {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--color-primary);
      }
      .nav-list {
        list-style: none;
        display: flex;
        gap: 2rem;
      }
      .nav-list a {
        text-decoration: none;
        font-weight: 600;
        color: var(--color-primary);
        transition: color 0.3s;
      }
      .nav-list a:hover {
        color: var(--color-accent);
      }
      .btn-signup {
        padding: 0.5rem 1rem;
        background: var(--color-accent);
        color: var(--color-secondary);
        border-radius: 24px;
        transition: transform 0.2s;
      }
      .btn-signup:hover {
        transform: scale(1.05);
      }

      /* Hero */
      .hero {
        position: relative;
        height: 100vh;
        background: url("images/site.jpg") center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
          to bottom right,
          rgba(0, 0, 0, 0.5),
          rgba(0, 0, 0, 0.3)
        );
      }
      .hero-content {
        position: relative;
        text-align: center;
        color: var(--color-secondary);
        max-width: 800px;
        padding: 0 1rem;
        animation: fadeInUp 1s ease both;
      }
      .hero h2 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1rem;
      }
      .hero p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
      }
      .btn-primary {
        padding: 0.75rem 2rem;
        background: var(--color-accent);
        color: var(--color-secondary);
        font-weight: 600;
        border-radius: 50px;
        text-decoration: none;
        transition: transform 0.2s;
      }
      .btn-primary:hover {
        transform: scale(1.05);
      }

      /* Features */
      .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 2rem;
      }
      .feature {
        background: var(--color-secondary);
        text-align: center;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
        opacity: 0;
        transform: translateY(20px);
      }
      .feature:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      }
      .feature img {
        width: 280px;
        margin-bottom: 1rem;
      }
      .feature h3 {
        margin-bottom: 0.5rem;
        font-weight: 600;
      }
      .feature p {
        font-size: 0.95rem;
        color: #555;
      }

      /* Testimonials */
      .testimonials {
        background: #f9f9f9;
        padding: 4rem 0;
      }
      .testimonial {
        background: var(--color-secondary);
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        text-align: center;
        font-style: italic;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(20px);
      }
      .testimonial img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
      }
      .testimonial p {
        margin-bottom: 1rem;
      }
      .testimonial h4 {
        font-weight: 600;
        font-size: 0.9rem;
        color: #333;
      }
      .testimonial:before {
        content: "“";
        font-size: 4rem;
        color: rgba(0, 0, 0, 0.1);
        position: absolute;
        top: -10px;
        left: 10px;
      }

      /* Newsletter */
      .newsletter {
        text-align: center;
        padding: 4rem 0;
      }
      .newsletter h2 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
      }
      .newsletter p {
        font-size: 1rem;
        margin-bottom: 1.5rem;
        color: #555;
      }
      .newsletter-form {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.5rem;
      }
      .newsletter-form input[type="email"] {
        padding: 0.75rem 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 300px;
        max-width: 100%;
      }
      .newsletter-form button {
        padding: 0.75rem 1.5rem;
        background: var(--color-accent);
        color: var(--color-secondary);
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .newsletter-form button:hover {
        opacity: 0.9;
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
            <li><a href="index.html#testimonials">Témoignages</a></li>
            <li><a href="index.html#newsletter">Newsletter</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="formulaire.php" class="btn-signup">S’inscrire</a></li>
          </ul>
        </nav>
      </div>



    </header>
  <main class="container">
    <h1 class="page-title">Nos derniers chantiers archéologiques</h1>

    <section class="chantiers-grid">

      <!-- Chantier 1 -->
      <div class="chantier-card">
        <h2>Bibracte ... une ville gauloise</h2>
        <img src="images/Bibracte2.jpg" alt="Ruine Bibracte">
        <p><strong>Lieu :</strong> Bourgogne-Franche-Comté, France</p>
        <p><strong>Dates :</strong> Juin - Juillet 2024</p>
        <p>Découvrez Bibracte, capitale gauloise exceptionnelle, nichée au cœur du massif du Morvan. Partez à la découverte des vestiges de cette cité antique, seul ou avec un guide, et immergez-vous dans l'histoire de la Gaule romaine.</p>
      </div>

      <!-- Chantier 2 -->
      <div class="chantier-card">
        <h2>La Roche de Solutré</h2>
        <img src="images/Roche de solutré .jpg" alt="Roche de Solutré">
        <p><strong>Lieu :</strong> Solutré-Pouilly, France</p>
        <p><strong>Dates :</strong> Depuis 2022</p>
        <p>Ce site emblématique du Paléolithique supérieur a révélé d'importants vestiges préhistoriques. Il a donné son nom à la civilisation solutréenne grâce à la richesse de ses outils en silex et restes fauniques.</p>
      </div>

      <!-- Chantier 3 -->
      <div class="chantier-card">
        <h2>Berry-au-Bac</h2>
        <img src="images/Berry au bac .jpg" alt="Berry-au-Bac">
        <p><strong>Lieu :</strong> Berry-au-Bac, France</p>
        <p><strong>Dates :</strong> 2024</p>
        <p>Ce site archéologique majeur de l'Aisne a livré des vestiges allant du Mésolithique à l'époque médiévale. La zone explorée est riche en découvertes depuis les années 1960.</p>
      </div>

      <!-- Chantier 4 -->
      <div class="chantier-card">
        <h2>Le Mont Castel (Calvados)</h2>
        <img src="images/le mont castel.jpg" alt="Le Mont Castel">
        <p><strong>Lieu :</strong> Calvados, Normandie, France</p>
        <p><strong>Dates :</strong> Avril 2025</p>
        <p>Depuis 2014, le site révèle des traces d'occupation allant du Bronze final à l'époque romaine. Il s'agit d'un ancien site militaire actif à la fin de la guerre des Gaules.</p>
      </div>

      <!-- Chantier 5 -->
      <div class="chantier-card">
        <h2>La Grotte Chauvet 2</h2>
        <img src="images/grotte chauvet2.PNG" alt="Grotte Chauvet 2">
        <p><strong>Lieu :</strong> Ardèche, France</p>
        <p><strong>Dates :</strong> Octobre 2023</p>
        <p>Ce site boisé de 15 hectares comprend une restitution de la Grotte Chauvet et des espaces ludiques pour découvrir la Préhistoire. Une immersion unique dans l'art pariétal paléolithique.</p>
      </div>

      
      <!-- Chantier 6 -->
      <div class="chantier-card">
        <h2>Les Grottes d'Isturitz et d'Oxocelhaya </h2>
        <img src="images/GROTTES D'ISTURITZ ET D'OXOCELHAYA.jpg" alt="Grottes d'Isturitz et d'Oxocelhaya">
        <p><strong>Lieu :</strong> Nouvelle-Aquitaine, France</p>
        <p><strong>Dates :</strong> Juin 2025</p>
        <p>À seulement 30 minutes d'Anglet, explorez l'un des sites archéologiques les plus riches d'Europe : les grottes d'Isturitz et d'Oxocelhaya. Nichées dans la vallée de l'Arberoue, sous la colline de Gaztelu, ces grottes offrent un parcours fascinant de 600 mètres.</p>
      </div>
      

    </section>
  </main>

  <footer class="site-footer">
    <p>&copy; 2025 Archéo-IT. Tous droits réservés.</p>
  </footer>

</body>
</html>
