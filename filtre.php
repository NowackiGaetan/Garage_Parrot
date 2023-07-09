<?php

$minPrice = $_POST['minPrice'];
$maxPrice = $_POST['maxPrice'];
$kilometrage = $_POST['kilometrage'];
$year = $_POST['year'];

$baseSql = "SELECT * FROM cars";
$conditionSql = "";
$conditions = array();


if ($minPrice) {
    $conditions[] = "price >= $minPrice";
}


if ($maxPrice) {
    $conditions[] = "price <= $maxPrice";
}

if ($kilometrage) {
    $conditions[] = "kilometrage <= $kilometrage";
}

if ($year) {
    $conditions[] = "year <= $year";
}

if (count($conditions) > 0) {
    $conditionSql = "WHERE " . join(" AND ", $conditions);
}


$sql = $baseSql . " " . $conditionSql;
$result = $pdo->query($sql);
