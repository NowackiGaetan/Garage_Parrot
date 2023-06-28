<?php

try{
    session_start();
    $pdo = new PDO("mysql:host=localhost;dbname=garageparrot", "root","");
}catch(PDOException $e){
    die("Impossible de se connecter à la base de donnée:"  . $e->getMessage());
}

