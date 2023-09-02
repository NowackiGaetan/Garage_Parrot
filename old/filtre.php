<?php

$minPrice = $_GET['minPrice'] ?? null;
$maxPrice = $_GET['maxPrice'] ?? null;
$kilometrage = $_GET['kilometrage'] ?? null;
$year = $_GET['year'] ?? null;

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
    $conditions[] = "year >= $year";
}

if (count($conditions) > 0) {
    $conditionSql = "WHERE " . join(" AND ", $conditions);
}


$sql = $baseSql . " " . $conditionSql;
$result = $pdo->query($sql);
