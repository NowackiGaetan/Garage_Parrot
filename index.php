<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" media="all">
    <link href="style/mediaquery.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Garage V.Parrot</title>
</head>

<body>
    <?php
    require_once('./header.php');
    ?>
    <div id="garageStatus"></div>
    <?php
    require_once('./main.php');
    ?>
    <div class="container container-link-to-used-cars" id="used-cars">
        <h2 class="text-center"> Découvrez nos véhicules d'occasions ici</h2>
        <a href="used-cars-list.php"><button type="button" class="btn btn-warning">Je fonce</button></a>
    </div>
    <?php
    require_once('./avis-client.php');
    require_once('infos.php');
    require_once('./footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>