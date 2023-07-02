<ul>
<?php
include ('header.php');
include ('meta.php');
require ('actions/database.php');

$sql = 'SELECT * FROM cars ORDER BY dateAjout DESC';
$req = $pdo->query($sql);
while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
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
                    </div>
            </div>
        </div>         

        <?php

    }
    ?>
</ul>

<!--<div class="container  testbdd">
    
    <img src="export.php?id=2" />

</div>-->