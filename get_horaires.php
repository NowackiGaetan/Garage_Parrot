<?php
require('actions/database.php');

$result = $pdo->query('SELECT jour_semaine, horaire FROM horaires_garage');

$horaires = array();

if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $horaires[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($horaires);
