<?php
require('actions/database.php');

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["data"])) {
        $data = $_GET["data"];
        $sql = "SELECT * FROM cars WHERE 1";
        if (isset($_GET["filterPrice"]) && $_GET["filterPrice"] !== "") {
            $filterPrice = $_GET["filterPrice"];
            $sql .= " AND price < $filterPrice";
        }

        if (isset($_GET["filterKilometrage"]) && $_GET["filterKilometrage"] !== "") {
            $filterKilometrage = $_GET["filterKilometrage"];
            $sql .= " AND kilometrage < $filterKilometrage";
        }

        if (isset($_GET["filterYear"]) && $_GET["filterYear"] !== "") {
            $filterYear = $_GET["filterYear"];
            $sql .= " AND year > $filterYear";
        }
        $result = $pdo->query($sql);
        $rows = array();
        while ($row = $result->fetch()) {
            $result2 = $pdo->query("SELECT path, is_main AS isMain FROM cars_img WHERE id_car = $row[id]");
            $rowsPhoto = array();
            while ($rowPhoto = $result2->fetch()) {
                $rowsPhoto[] = $rowPhoto;
            }
            $row['photos'] = $rowsPhoto;
            $rows[] = $row;
        }
        echo json_encode($rows);
    }
}
