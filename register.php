<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'sitearche_db';
$username = 'lamis';
$password = 'motdepasse';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Active les erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données du formulaire
    $nom     = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $age     = $_POST['age'];
    $sexe    = $_POST['sexe'];
    $adresse = $_POST['adresse'];
    $email   = $_POST['email'];
    $mdp     = $_POST['password'];

    // Prépare et exécute la requête
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, age, sexe, adresse, email, password) 
                           VALUES (:nom, :prenom, :age, :sexe, :adresse, :email, :password)");
    
    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':age' => $age,
        ':sexe' => $sexe,
        ':adresse' => $adresse,
        ':email' => $email,
        ':password' => $mdp
    ]);

    // Redirection vers la page de succès
    header("Location: success.php");
    exit();
}
?>

