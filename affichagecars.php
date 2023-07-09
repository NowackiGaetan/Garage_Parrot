<div class="card-h-100">
    <div class="card active">
        <img src="assets/<?php echo $row['brand']; ?>.jpg" class="card-img-top" alt="image-voiture">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['brand'] . ' ' . $row['model']; ?></h5>
            <div class="description-cars">
                <div class="description-left">
                    <p class="card-text">
                        <?php echo $row['kilometrage']; ?>km<br>
                        <?php echo $row['fuel']; ?><br>
                        <?php echo $row['year']; ?><br>
                    </p>
                </div>
                <div class="description-right">
                    <p><?php echo $row['price']; ?>€</p>
                </div>
            </div>
            <br><br>
            <div class="details">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal">
                    Détails
                </button>
                <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="infoModalLabel"><?php echo $row['brand'] . ' ' . $row['model']; ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo $row['description']; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="contact.php" class="info-contact">Pour + d'informations, contactez nous</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js/index.js"></script>