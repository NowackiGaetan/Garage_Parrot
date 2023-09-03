<?php
require('actions/database.php');


$jour_semaine = $_POST['jour_semaine'];
$horaire_ouverture_matin = $_POST['horaire_ouverture_matin'];
$horaire_fermeture_matin = $_POST['horaire_fermeture_matin'];
$horaire_ouverture_aprem = $_POST['horaire_ouverture_aprem'];
$horaire_fermeture_aprem = $_POST['horaire_fermeture_aprem'];

$sql = "UPDATE horaires_garage SET
        horaire_ouverture_matin = '$horaire_ouverture_matin',
        horaire_fermeture_matin = '$horaire_fermeture_matin',
        horaire_ouverture_aprem = '$horaire_ouverture_aprem',
        horaire_fermeture_aprem = '$horaire_fermeture_aprem'
        WHERE jour_semaine = '$jour_semaine'";

if ($pdo->query($sql) === TRUE) {
    echo "Horaires mis à jour avec succès !";
} else {
    echo "Erreur lors de la mise à jour des horaires : ";
}
