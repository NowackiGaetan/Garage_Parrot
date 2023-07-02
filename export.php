<?php
include('actions/database.php');
$req=$pdo->prepare('SELECT * FROM cars WHERE id = ?');
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute(array($_GET["id"]));
$tab=$req->fetchAll();
echo $tab[1]["name"];