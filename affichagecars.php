<div class="card-h-100 box-card">
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
                <button type="button" class="btn btn-warning btn-dtl" data-bs-toggle="modal" data-bs-target="#infoModal<?php echo $row['id']; ?>">
                    Détails
                </button>
                <div class="modal fade" id="infoModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="infoModalLabel"><?php echo $row['brand'] . ' ' . $row['model']; ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExample<?php echo $row['id']; ?>" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/photo/<?php echo $row['brand']; ?>1.jpg" class="d-block w-100" alt="photo voiture 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/photo/<?php echo $row['brand']; ?>2.jpg" class="d-block w-100" alt="photo voiture 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/photo/<?php echo $row['brand']; ?>3.jpg" class="d-block w-100" alt="photo voiture 3">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample<?php echo $row['id']; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample<?php echo $row['id']; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <br>
                                <?php echo $row['description']; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-auto">
                <br>
                <p>Ce véhicule vous plait? </p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>" data-bs-whatever="@mdo">Contactez nous</button>
                <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">A propos du véhicule <?php echo $row['brand'] . ' ' . $row['model']; ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="https://formspree.io/f/myyajbbj">
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">Nom:</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstname" class="col-form-label">Prénom:</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tel" class="col-form-label">Téléphone:</label>
                                        <input type="tel" class="form-control" id="tel">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js/index.js"></script>