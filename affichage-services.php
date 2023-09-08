<?php
require("actions/database.php");

$query = "SELECT service_id, service_description FROM services WHERE service_active = 1";
$result = $pdo->query($query);

$services = array();

if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $services[] = $row;
    }
}

// Définir le type de contenu de la réponse comme JSON
header('Content-Type: application/json');

// Renvoyer les données JSON
echo json_encode($services);
