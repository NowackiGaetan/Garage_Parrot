<?php
require('actions/database.php');

$data = $_POST;

try {

    $data = $_POST;

    $entCaro = isset($_POST['ent-caro']) ? $_POST['ent-caro'] : 0;
    $revision = isset($_POST['revision']) ? $_POST['revision'] : 0;
    $vidange = isset($_POST['vidange']) ? $_POST['vidange'] : 0;
    $freinage = isset($_POST['freinage']) ? $_POST['freinage'] : 0;
    $pneugeo = isset($_POST['pneu-geo']) ? $_POST['pneu-geo'] : 0;
    $crevaison = isset($_POST['crevaison']) ? $_POST['crevaison'] : 0;
    $climatisation = isset($_POST['climatisation']) ? $_POST['climatisation'] : 0;
    $batterie = isset($_POST['batterie']) ? $_POST['batterie'] : 0;
    $distribution = isset($_POST['distribution']) ? $_POST['distribution'] : 0;

    $query = "UPDATE services SET service_active = :value WHERE service_name = :name";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':value', $entCaro, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'ent-caro', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $revision, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'revision', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $vidange, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'vidange', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $freinage, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'freinage', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $pneugeo, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'pneu-geo', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $crevaison, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'crevaison', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $climatisation, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'climatisation', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $batterie, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'batterie', PDO::PARAM_STR);
    $stmt->execute();

    $stmt->bindParam(':value', $distribution, PDO::PARAM_INT);
    $stmt->bindValue(':name', 'distribution', PDO::PARAM_STR);
    $stmt->execute();


    $pdo = null;
} catch (PDOException $e) {
    // Erreur de connexion à la base de données
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
