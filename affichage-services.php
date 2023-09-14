<?php
require("actions/database.php");

$query = "SELECT service_id, service_description FROM services WHERE service_active = 1";
$result = $pdo->query($query);

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $services = array();

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $services[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($services);
} catch (Exception $e) {
    echo "Erreur lors de l'éxécution de la requête. " . $e->getMessage();
}
