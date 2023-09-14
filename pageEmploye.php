<?php

include('meta.php');
include('actions/loginAction.php');

if (isset($_POST['addCar'])) {
    include('actions/database.php');

    if (!empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['kilometrage']) && !empty($_POST['fuel']) && !empty($_POST['year']) && !empty($_POST['price']) && !empty($_POST['description'])) {

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

        if ($req->execute()) {
            echo '<div class="alert alert-success" role="alert">La voiture a été ajoutée avec succès</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Erreur lors de l\'ajout de la voiture</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs du formulaire</div>';
    }
}

?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage">
            <div class="decon">
                <a href="actions/logoutAction.php"><button type="button" class="btn btn-danger">Se déconnecter</button></a>
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
            <div style="text-align:center">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <button type="submit" name="addCar" id="addCar" class="btn btn-success">Ajouter véhicule</button>
            </div>
        </form>
    </div>
</div>