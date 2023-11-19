<?php
require('actions/database.php');

$jour_semaine = $_POST['jour_semaine'];
$horaire_ouverture_matin = htmlspecialchars($_POST['horaire_ouverture_matin']);
$horaire_fermeture_matin = htmlspecialchars($_POST['horaire_fermeture_matin']);
$horaire_ouverture_aprem = htmlspecialchars($_POST['horaire_ouverture_aprem']);
$horaire_fermeture_aprem = htmlspecialchars($_POST['horaire_fermeture_aprem']);

$sql = "UPDATE horaires_garage SET
            horaire_ouverture_matin = :horaire_ouverture_matin,
            horaire_fermeture_matin = :horaire_fermeture_matin,
            horaire_ouverture_aprem = :horaire_ouverture_aprem,
            horaire_fermeture_aprem = :horaire_fermeture_aprem
            WHERE jour_semaine = :jour_semaine";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':horaire_ouverture_matin', $horaire_ouverture_matin, PDO::PARAM_STR);
$stmt->bindParam(':horaire_fermeture_matin', $horaire_fermeture_matin, PDO::PARAM_STR);
$stmt->bindParam(':horaire_ouverture_aprem', $horaire_ouverture_aprem, PDO::PARAM_STR);
$stmt->bindParam(':horaire_fermeture_aprem', $horaire_fermeture_aprem, PDO::PARAM_STR);
$stmt->bindParam(':jour_semaine', $jour_semaine, PDO::PARAM_STR);

try {
    if ($stmt->execute()) {
        echo "Horaires mis à jour avec succès !";
    } else {
        echo "Erreur lors de la mise à jour des horaires.";
    }
} catch (PDOException $e) {
    echo "Erreur lors de la mise à jour des horaires : " . $e->getMessage();
}
