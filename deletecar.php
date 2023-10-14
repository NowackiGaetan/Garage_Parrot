<?php
require("actions/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $carId = $_POST["id"];


    $stmtDeleteCarImages = $pdo->prepare("DELETE FROM cars_img WHERE id_car = :carId");
    $stmtDeleteCarImages->bindParam(':carId', $carId, PDO::PARAM_INT);
    $carImagesDeleted = $stmtDeleteCarImages->execute();

    if ($carImagesDeleted) {

        $stmtDeleteCar = $pdo->prepare("DELETE FROM cars WHERE id = :carId");
        $stmtDeleteCar->bindParam(':carId', $carId, PDO::PARAM_INT);

        if ($stmtDeleteCar->execute()) {
            echo "Voiture supprimée avec succès.";
        } else {
            echo "Erreur lors de la suppression de la voiture.";
        }
    } else {
        echo "Erreur lors de la suppression des images de la voiture.";
    }
} else {
    echo "ID non spécifié ou méthode invalide.";
}
