<?php

try {
    session_start();
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $pdo = new PDO("mysql:host=localhost;dbname=garageparrot", "root", "", $options);
} catch (PDOException $e) {
    die("Impossible de se connecter à la base de donnée:"  . $e->getMessage());
}
