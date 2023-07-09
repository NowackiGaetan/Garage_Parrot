<!DOCTYPE html>
<html lang="fr">

<body>
    <?php
    require_once('./meta.php');
    require_once('./header.php');
    require_once('./main.php');
    ?>
    <div class="container container-link-to-used-cars" id="used-cars">
        <h2 class="text-center"> Cliquez ici pour découvrir nos véhicules d'occasions</h2>
        <a href="used-cars-list.php"><button type="button" class="btn btn-warning">Je fonce</button></a>
    </div>
    <?php
    require_once('infos.php');
    require_once('./footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</body>

</html>