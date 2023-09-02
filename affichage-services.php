<?php
require("actions/database.php");

$query = "SELECT * FROM services WHERE service_active = 1";
$result = $conn->query($query);

$services = array();
while ($row = $result->fetch_assoc()) {
    $services[] = $row["service_name"];
}
