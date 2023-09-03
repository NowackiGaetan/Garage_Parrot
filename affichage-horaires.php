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

$horaires = array();

// Récupérer les données et les stocker dans un tableau associatif
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $horaires[] = $row;
    }
}

// Renvoyer les données au format JSON
header('Content-Type: application/json');
echo json_encode($horaires);
