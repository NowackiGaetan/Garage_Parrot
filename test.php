<?php
include ('meta.php');
include ('header.php');
require ('actions/database.php');
?>
<div class="container  container-cars">
<?php
$sql = 'SELECT * FROM cars ORDER BY dateAjout DESC';
$req = $pdo->query($sql);
while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
    {
?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="list-cars col">
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
                                <div>
                                    <button type="button" class="btn btn-primary btn-details" id="btn-details">Détails</button>
                                        <div class="details" style="display: none;">
                                            <?php echo $row['description'];?>
                                        </div>
                                </div>        
                            </div>
                    </div>
            </div>
        </div>         
    </div>
    <?php

}
?>
</div>

