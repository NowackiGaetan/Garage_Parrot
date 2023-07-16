<?php
require('actions/database.php');
require('meta.php');
require('header.php');
?>

<div class="container-used-cars">
    <h3>Véhicules d'occasion</h3>
    <!------------- Filtre ----------->
    <form method="GET">
        <p>Filtrer vos recherches:</p>
        <div class="filters">
            <div class="infoPrice">
                <label for="minPrice">Prix :</label>
                <select name="minPrice" id="minPrice">
                    <option value="0">Prix minimum</option>
                    <option value="1000">1 000</option>
                    <option value="5000">5 000</option>
                    <option value="10000">10 000</option>
                    <option value="15000">15 000</option>
                    <option value="20000">20 000</option>
                </select>
                <br>
                <select name="maxPrice" id="maxPrice">
                    <option value="999999999">Prix maximum</option>
                    <option value="1000">1 000</option>
                    <option value="5000">5 000</option>
                    <option value="10000">10 000</option>
                    <option value="15000">15 000</option>
                    <option value="20000">20 000</option>
                </select>
                <input type="submit" value="Filtrer" class="btn btn-filter btn-warning" name="filterPrice">
            </div>

            <div class="infoKm">
                <label for="kilometre">Kilométrage:</label>
                <select id="kilometre" name="kilometrage">
                    <option value="0">--Filtrer par kilométrage:--</option>
                    <option value="100000"> Moins de 100000km</option>
                    <option value="150000"> Moins de150000km</option>
                    <option value="200000"> Moins de 200000km</option>
                </select>
                <input type="submit" value="Filtrer" class="btn btn-filter btn-warning" name="filterKm">
            </div>

            <div class="infoYear">
                <label for="year">Année:</label>
                <select id="year" name="year">
                    <option value="0">--Filtrer par année:--</option>
                    <option value="2005"> A partir de 2005</option>
                    <option value="2010"> A partir de 2010</option>
                    <option value="2015"> A partir de 2015</option>
                </select>
                <input type="submit" value="Filtrer" class="btn btn-filter btn-warning" name="filterYear">
            </div>
        </div>
        <br>

    </form>
    <!-------------AFFICHAGE DES RESULTATS  ----------->
    <div class="container-cars">
        <div class="list-cars row row-cols-1 row-cols-md-3 g-4">
            <?php
            include('filtre.php');
            foreach ($result as $row) {
                include("affichagecars.php");
            };
            ?>

        </div>
    </div>
</div>
<?php
include('footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>