<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'sitearche_db'; 
$username = 'lamis';       
$password = 'motdepasse';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Requête SQL pour insérer les données
    $sql = "INSERT INTO contact (nom, prenom, email, sujet, message)
            VALUES (:nom, :prenom, :email, :sujet, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':sujet' => $sujet,
        ':message' => $message
    ]);

    // Redirection vers la page de succès
    header("Location: success.php");
    exit();

} catch (PDOException $e) {
    // Affiche une erreur si problème de connexion ou insertion
    echo "Erreur : " . $e->getMessage();
}
?>

