<?php
require('actions/database.php');

$sql = "SELECT 
jour_semaine, 
DATE_FORMAT(horaire_ouverture_matin, '%H:%i') AS horaire_ouverture_matin_format,
DATE_FORMAT(horaire_fermeture_matin, '%H:%i') AS horaire_fermeture_matin_format,
DATE_FORMAT(horaire_ouverture_aprem, '%H:%i') AS horaire_ouverture_aprem_format,
DATE_FORMAT(horaire_fermeture_aprem, '%H:%i') AS horaire_fermeture_aprem_format
FROM horaires_garage";
$result = $pdo->query($sql);

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($horaires);
} catch (PDOException $e) {
    die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
}
