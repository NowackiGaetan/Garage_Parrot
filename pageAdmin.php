<?php
include('meta.php');
include('actions/loginAction.php');
$photos = array();
if (isset($_POST['addCar'])) {
    var_dump($_FILES['addCarImg']);

    for ($i = 0; $i < count($_FILES['addCarImg']["name"]); $i++) {
        if (is_uploaded_file($_FILES['addCarImg']['tmp_name'][$i])) {
            //First, Validate the file name
            if (empty($_FILES['addCarImg']['name'][$i])) {
                echo " File name is empty! ";
                exit;
            }

            $upload_file_name = $_FILES['addCarImg']['name'][$i];
            //Too long file name?
            if (strlen($upload_file_name) > 100) {
                echo " too long file name ";
                exit;
            }

            //replace any non-alpha-numeric cracters in th file name
            $upload_file_name = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_name);

            //set a limit to the file upload size
            if ($_FILES['addCarImg']['size'][$i] > 1000000) {
                echo " too big file ";
                exit;
            }

            //Save the file
            $dest = __DIR__ . '/assets/photo/' . $upload_file_name;
            if (move_uploaded_file($_FILES['addCarImg']['tmp_name'][$i], $dest)) {
                $photos[$i] = $upload_file_name;
                echo "File $upload_file_name Has Been Uploaded !";
            }
        }
    }

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

    $brand = $_POST['brand'];
    $sql = "SELECT * FROM cars WHERE brand = '$brand'";
    $cars = $pdo->query($sql);
    foreach ($cars as $car) {
        for ($i = 0; $i < count($photos); $i++) {
            $isMain = $i == 0 ? 1 : 0;
            $id = $car['id'];
            $reqPhotos = $pdo->prepare("INSERT INTO cars_img (path, id_car, is_main) VALUES ('./assets/photo/$photos[$i]', $id, $isMain)");
            var_dump($reqPhotos);
            $reqPhotos->execute();
        }
    }
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
<h1 class="title-admin" style="text-align:center">Page Admin</h1>
<div class="action-admin">
    <a href="inscription.php">Inscrire un nouvel employé</a><br><br>
    <a href="validation-coms.php">Traiter les commentaires clients</a>
</div>
<div class="box-admin">
    <div class="containerCarAdd">
        <h3 style="text-align:center">Ajouter un véhicule à la vente</h3>
        <div class="carAdd">
            <form method="POST" enctype="multipart/form-data">
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
                    <input multiple type="file" id="addCarImg" name="addCarImg[]" accept="image/png, image/jpeg" />
                </div>

                <div>
                    <button type="submit" name="addCar" id="addCar" class="btn btn-success">Ajouter véhicule</button>
                </div>
            </form>
        </div>
    </div>
    <div class="containerCarAdd containerService">
        <h3 style="text-align:center">Services proposés</h3>
        <div class="carAdd carService">
            <?php include("services.php"); ?>
        </div>
    </div>
    <div class="containerCarAdd">
        <h3 style="text-align:center">Horaires</h3>
        <div class="carAdd carService">
            <?php include('horaires.php'); ?>
        </div>
    </div>
</div>
</div>