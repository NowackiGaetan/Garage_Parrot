<?php
require("actions/database.php");

// Gérer les requêtes POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["services"])) {
        $selectedServices = $_POST["services"];

        // Enregistrement des services sélectionnés dans la base de données
        $serviceIds = implode(",", $selectedServices);
        $updateQuery = "UPDATE services SET service_active = 1 WHERE service_id IN ($serviceIds)";

        if ($pdo->query($updateQuery) === TRUE) {
            $response = ["message" => "Services enregistrés avec succès"];
            echo json_encode($response);
        } else {
            $response = ["message" => "Erreur lors de l'enregistrement des services"];
            echo json_encode($response);
        }
    } elseif (isset($_POST["newService"])) {
        $newService = $_POST["newService"];

        // Ajout du nouveau service à la base de données
        $insertQuery = "INSERT INTO services (service_name, service_active) VALUES ('$newService', 1)";

        if ($pdo->query($insertQuery) === TRUE) {
            $response = ["message" => "Service ajouté avec succès"];
            echo json_encode($response);
        } else {
            $response = ["message" => "Erreur lors de l'ajout du service"];
            echo json_encode($response);
        }
    }
}
