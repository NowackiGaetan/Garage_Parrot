<?php 

include ('meta.php');
include ('header.php');

if (isset($_POST['addCar'])) {
    include ('actions/database.php');
    $NOW=date('Y-m-d H:i:s');
    $req= $pdo->prepare("INSERT INTO cars (brand, model, kilometrage, fuel, year, price, description, dateAjout) VALUES (:brand, :model, :kilometrage, :fuel, :year, :price, :description, :dateAjout)");
    $req->bindParam(':brand', $_POST['brand']);
    $req->bindParam(':model', $_POST['model']);
    $req->bindParam(':kilometrage', $_POST['kilometrage']);
    $req->bindParam(':fuel', $_POST['fuel']);
    $req->bindParam(':year', $_POST['year']);
    $req->bindParam(':price', $_POST['price']);
    $req->bindParam(':description', $_POST['description']);
    $req->bindParam(':dateAjout', $NOW);
    $req->execute();

    //header('Location: test2.php');
}


?>
<div class="containerCarAdd">
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
           
            
            
            <button type="submit" name="addCar" id="addCar">Ajouter véhicule</button>
        
        </form>
    </div>
</div>

