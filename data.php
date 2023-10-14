<?php
require('actions/database.php');

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["data"])) {
        $data = $_GET["data"];
        $sql = "SELECT * FROM cars WHERE 1";
        $filters = array();
        $params = array();

        if (isset($_GET["filterPrice"]) && $_GET["filterPrice"] !== "") {
            $filterPrice = $_GET["filterPrice"];
            $sql .= " AND price < $filterPrice";
            $filters[] = "price < :filterPrice";
            $params['filterPrice'] = $filterPrice;
        }

        if (isset($_GET["filterKilometrage"]) && $_GET["filterKilometrage"] !== "") {
            $filterKilometrage = $_GET["filterKilometrage"];
            $sql .= " AND kilometrage < $filterKilometrage";
            $filters[] = "kilometrage < :filterKilometrage";
            $params['filterKilometrage'] = $filterKilometrage;
        }

        if (isset($_GET["filterYear"]) && $_GET["filterYear"] !== "") {
            $filterYear = $_GET["filterYear"];
            $sql .= " AND year >= $filterYear";
            $filters[] = "year >= :filterYear";
            $params['filterYear'] = $filterYear;
        }

        if (!empty($filters)) {
            $sql .= " AND (" . implode(" AND ", $filters) . ")";
        }

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

        $rows = array();
        while ($row = $stmt->fetch()) {
            $stmt2 = $pdo->prepare("SELECT path, is_main AS isMain FROM cars_img WHERE id_car = :carId");
            $stmt2->bindParam(':carId', $row['id'], PDO::PARAM_INT);
            $stmt2->execute();

            $rowsPhoto = array();
            while ($rowPhoto = $stmt2->fetch()) {
                $rowsPhoto[] = $rowPhoto;
            }
            $row['photos'] = $rowsPhoto;
            $rows[] = $row;
        }
        echo json_encode($rows);
    }
}
