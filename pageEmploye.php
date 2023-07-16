<?php

include('meta.php');
include('actions/loginAction.php');

if (isset($_POST['addCar'])) {
    include('actions/database.php');
    $NOW = date('Y-m-d H:i:s');
    $req = $pdo->prepare("INSERT INTO cars (brand, model, kilometrage, fuel, year, price, description, dateAjout) VALUES (:brand, :model, :kilometrage, :fuel, :year, :price, :description, :dateAjout)");
    $req->bindParam(':brand', $_POST['brand']);
    $req->bindParam(':model', $_POST['model']);
    $req->bindParam(':kilometrage', $_POST['kilometrage']);
    $req->bindParam(':fuel', $_POST['fuel']);
    $req->bindParam(':year', $_POST['year']);
    $req->bindParam(':price', $_POST['price']);
    $req->bindParam(':description', $_POST['description']);
    $req->bindParam(':dateAjout', $NOW);
    $req->execute();
}


?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse list-activity" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#list-services">Mécanique/Entretien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#used-cars">Véhicules d'occasions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="actions/logoutAction.php"><button type="button" class="btn btn-danger">Se déconnecter</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="containerCarAdd">
    <h1 style="text-align:center">Page Employé</h1><br><br><br>
    <h3 style="text-align:center">Ajouter un véhicule à la vente</h3>
    <div class="carAdd">
        <form method="POST">
            <div>
                <input type="text" id="brand" name="brand" placeholder="Tapez la marque...">
            </div>
            <div>
                <input type="text" id="model" name="model" placeholder="Tapez le modèle">
            </div>
            <div>
                <input type="text" id="kilometrage" name="kilometrage" placeholder="Tapez le kilomètrage">
            </div>
            <div>
                <input type="text" id="fuel" name="fuel" placeholder="Type de Carburant">
            </div>
            <div>
                <input type="text" id="year" name="year" placeholder="Tapez l'année">
            </div>
            <div>
                <input type="text" id="price" name="price" placeholder="Entrez le prix">
            </div>
            <div>
                <textarea id="description" name="description" placeholder="Tapez la description"></textarea>
            </div>
            <div>

                <button type="submit" name="addCar" id="addCar" class="btn btn-success">Ajouter véhicule</button>
            </div>
        </form>
    </div>
</div>