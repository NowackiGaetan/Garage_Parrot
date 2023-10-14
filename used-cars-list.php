<?php
require('data.php');
require('meta.php');
require('header.php');
?>

<div class="container-used-cars">
    <h3>Véhicules d'occasion</h3>
    <p>Filtrer vos recherches:</p>
    <div class="filters">
        <div class="infoPrice">
            <label for="filterPrice">Prix en Euros inférieur à:</label>
            <input type="range" id="filterPrice" name="filterPrice" min="0" max="25000" value="25000" step="1000" oninput="numPrice.value = this.value">
            <output id="numPrice">25000</output>
        </div>

        <div class="infoKm">
            <label for="filterKilometrage">Kilométrage inférieur:</label>
            <input type="range" id="filterKilometrage" name="filterKilometrage" min="0" max="300000" value="200000" step="10000" oninput="numKm.value = this.value">
            <output id="numKm">150000</output>
        </div>

        <div class="infoYear">
            <label for="filterYear">Année supérieure à:</label>
            <input type="range" id="filterYear" name="filterYear" min="2000" max="2023" value="2000" step="1" oninput="numYear.value = this.value">
            <output id="numYear"></output>
        </div>
    </div>
</div>
<div id="container-cars" class="container-cars"></div>
<?php
include('footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>