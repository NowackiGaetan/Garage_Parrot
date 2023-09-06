<?php
require('actions/database.php');

// if (isset($_POST['save_button'])) {
//     // Assurez-vous que vous avez une connexion PDO à la base de données ici
//     try {
//         $pdo = new PDO("mysql:host=your_host;dbname=your_database", "your_username", "your_password");
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         // Définissez le tableau des noms de services
//         $services = array(
//             "ent-caro",
//             "revision",
//             "vidange",
//             "freinage",
//             "pneu-geo",
//             "crevaison",
//             "climatisation",
//             "batterie",
//             "distribution"
//         );

//         // Parcourez les noms des services et mettez à jour la base de données si la case à cocher est cochée
//         foreach ($services as $service) {
//             $service_name = strtolower(str_replace(' ', '_', $service));

//             if (isset($_POST[$service_name])) {
//                 // La case à cocher est cochée, mettez à jour la base de données
//                 $sql = "UPDATE services SET service_active = 1 WHERE service_name = :service_name";
//                 $stmt = $pdo->prepare($sql);
//                 $stmt->bindParam(':service_name', $service, PDO::PARAM_STR);
//                 $stmt->execute();
//             }
//         }

//         // Fermez la connexion PDO
//         $pdo = null;

//         echo "Mise à jour réussie.";
//     } catch (PDOException $e) {
//         echo "Erreur : " . $e->getMessage();
//     }
// }

// Récupérez les données envoyées depuis la page HTML
$data = $_POST;

// Parcourez les données et mettez à jour la table "service" en conséquence
// foreach ($data as $service_name => $service_value) {
//     // Utilisez une requête SQL pour mettre à jour la colonne "service_active"
//     $query = "UPDATE services SET service_active = " . (int)$service_value . " WHERE service_name = '" . $service_name . "'";

//     if ($pdo->query($query) === TRUE) {
//         // La mise à jour a réussi
//         echo "Mise à jour réussie pour " . $service_name . "\n";
//     } else {
//         // Erreur lors de la mise à jour
//         echo "Erreur lors de la mise à jour pour " . $service_name . "\n";
//         echo "Requête SQL : " . $query . "\n";
//         echo "service_name : " . $service_name . "\n";
//         echo "service_value : " . $service_value . "\n";
//     }
// }
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

    // Mettez à jour la base de données pour la case à cocher "ent-caro"
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

    echo "Mises à jour réussies dans la base de données.";
} catch (PDOException $e) {
    // Erreur de connexion à la base de données
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
