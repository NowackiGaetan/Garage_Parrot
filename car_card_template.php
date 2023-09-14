<div class="card-h-100 box-card">
    <div class="card active">
        <div class="div-img-car">
            <img src="%PHOTO_PATH%" class="card-img-top" alt="image-voiture">
        </div>
        <div class="card-body">
            <h5 class="card-title">%%BRAND%% %%MODEL%%</h5>
            <div class="description-cars">
                <div class="description-left">
                    <p class="card-text">
                        %KILOMETRAGE% km<br>%FUEL%<br>%YEAR%<br>
                    </p>
                </div>
                <div class="description-right">
                    <p class="prices">%PRICE% €</p>
                </div>
            </div>
            <br><br>
            <div class="details">
                <button type="button" class="btn btn-warning btn-dtl" data-bs-toggle="modal" data-bs-target="#infoModal%%ID%%">
                    Détails
                </button>
                <div class="modal fade" id="infoModal%%ID%%" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExample%%ID%%" class="carousel slide">
                                    <div class="carousel-inner">
                                        %%CAROUSEL_ITEMS%%
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample%%ID%%" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample%%ID%%" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <br>
                                %DESCRIPTION%
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal%%ID%%" data-bs-whatever="@mdo">Contactez nous</button>
                <div class="modal fade" id="exampleModal%%ID%%" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">A propos de ce véhicule</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="https:formspree.io/f/myyajbbj">
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