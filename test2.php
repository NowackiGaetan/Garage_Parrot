<?php
include ('meta.php');
include ('header.php');
require ('actions/database.php');
?>
<div class="container ">
<h3>Véhicules d'occasion</h3>
<!------------- Filtre ----------->
<form method="POST">
    <p>Filtrer vos recherches:</p>
        <div class="filters">
                    <label for="infoprice">Prix:</label>              
                    <select id="infoprice" class="infoprice" name="filterprice">
                        <option value="defaut" id="all">--Filtrer par prix:--</option>
                        <option value="Moins de 5000€" id="smallprice"> Moins de 5000€</option>
                        <option value="De 5000 à 10000€" id="mediumprice"> De 5000 à 10000€</option>
                        <option value="De 10000 à 15000€" id="bigprice"> De 10000 à 15000€</option>
                    </select>
                    <input type="submit" value="Filtrer par prix" class="btn btn-primary">
                    
                    
                    <label for="kilometre">Kilométrage:</label>
                    <select id="kilometre">
                        <option value="">--Filtrer par kilométrage:--</option>
                        <option value="Moins de 100.000km"> Moins de 100000km</option>
                        <option value="100000km à 150000km"> De 100000km à 150000km</option>
                        <option value="De 150000km à 200000km"> De 150000km à 200000km</option>
                    </select>
                    <input type="submit" value="Filtrer par kilométrage" class="btn btn-primary">
                    
                    <label for="year">Année:</label>
                    <select id="year">
                        <option value="">--Filtrer par année:--</option>
                        <option value="Avant 2010"> Avant 2010</option>
                        <option value="2010 à 2015"> De 2010 à 2015</option>
                        <option value="De 2015 à 2023"> De 2015 à 2023</option>
                    </select>
                    <input type="submit" value="Filtrer par année" class="btn btn-primary">
                 </div>
                 <br>

</form>
<!------------- REQUETE FILTRE  ----------->
    <div class="container-cars">
        <?php
        
        if(!empty($_POST['filterprice'])){
            if($_POST['filterprice']=='defaut'){      
            }if($_POST['filterprice']=='Moins de 5000€'){
                $sql_price="SELECT * FROM cars WHERE price  <= 5000";
                

            }if($_POST['filterprice']=='De 5000 à 10000€'){
                $sql_price="SELECT * FROM cars WHERE price BETWEEN 5001 AND 10000";
            }if($_POST['filterprice']=='De 10000 à 15000€'){
                $sql_price="SELECT * FROM cars WHERE price BETWEEN 10001 AND 15000";
            }else{
                $sql="SELECT * FROM cars";
            }}  


        //<!-------------AFFICHAGE DES RESULTATS  ----------->

        $sql = 'SELECT * FROM cars ORDER BY dateAjout DESC';
        $req = $pdo->query($sql);
        foreach ($req as $row) 
            {
                
                
        ?>

            
                <div class="list-cars">
                    <div class="card active">
                        <img src="assets/<?php echo $row['brand'];?>.jpg" class="card-img-top" alt="image-voiture">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['brand'].' '.$row['model']; ?></h5>
                                    <div class="description-cars">
                                        <div class="description-left">
                                            <p class="card-text">
                                                <?php echo $row['kilometrage'];?>km<br>
                                                <?php echo $row['fuel'];?><br>
                                                <?php echo $row['year'];?><br>
                                            </p>
                                        </div>
                                        <div class="description-right">
                                            <p><?php echo $row['price'];?>€</p>
                                        </div>
                                    </div>
                                    <!--<div class="details">
                                        <details>
                                             <summary>Description</summary>
                                                <p><?php echo $row['description'];?>
                                            </details>
                                        </div>
                                    </div>-->
                                    <br><br>
                                    <div class="essai">
                                        <button type="button" id="button-essai">click essai</button>
                                        <div  id="resultat-essai">
                                            <p>je suis un texte</p>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>         
                <?php 
                };
                ?>
            
    </div>
</div>

