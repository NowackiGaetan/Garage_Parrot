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
            <label for="filterPrice">Prix:</label>
            <select id="filterPrice">
                <option value="">Tous</option>
                <option value="10000">Moins de 10 000</option>
                <option value="15000">Moins de 15 000</option>
                <option value="20000">Moins de 20 000</option>
            </select>
        </div>

        <div class="infoKm">
            <label for="filterKilometrage">Kilométrage:</label>
            <select id="filterKilometrage">
                <option value="">Tous</option>
                <option value="100000">Moins de 100 000 km</option>
                <option value="150000">Moins de 150 000 km</option>
                <option value="200000">Moins de 200 000 km</option>
            </select>
        </div>

        <div class="infoYear">
            <label for="filterYear">Année:</label>
            <select id="filterYear">
                <option value="">Tous</option>
                <option value="2005">Après 2005</option>
                <option value="2010">Après 2010</option>
                <option value="2015">Après 2015</option>
            </select>
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