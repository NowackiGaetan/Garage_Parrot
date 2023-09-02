$(document).ready(function(){
    function fetchData() {
        var filterPrice = $("#filterPrice").val();
        var filterKilometrage = $("#filterKilometrage").val();
        var filterYear = $("#filterYear").val();
        $.ajax({
            url: "data.php",
            method: "GET",
            data : {data: "fetch_data",
            filterPrice: filterPrice,
            filterKilometrage: filterKilometrage,
            filterYear: filterYear},
            dataType: "json",
            success: function(response){
                let res = $("#container-cars");
                res.empty();

                response.forEach(function(row){                    
                    res.append(`
                    <div class="card-h-100 box-card">
                    <div class="card active">
                        <img src="${getMainImage(row.photos)}" class="card-img-top" alt="image-voiture">
                        <div class="card-body">
                            <h5 class="card-title">`+ row.brand +` `+ row.model +`</h5>
                            <div class="description-cars">
                                <div class="description-left">
                                    <p class="card-text">
                                    `+ row.kilometrage +` km<br>
                                        `+ row.fuel +`<br>
                                        `+ row.year +`<br>
                                    </p>
                                </div>
                                <div class="description-right">
                                    <p class="prices">`+ row.price +` €</p>
                                </div>
                            </div>
                            <br><br>
                            <div class="details">
                                <button type="button" class="btn btn-warning btn-dtl" data-bs-toggle="modal" data-bs-target="#infoModal`+ row.id +`">
                                    Détails
                                </button>
                                <div class="modal fade" id="infoModal`+ row.id +`" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="infoModalLabel">`+ row.brand +` `+ row.model +`</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExample`+ row.id +`" class="carousel slide">
                                                    <div class="carousel-inner">
                                                    ${createCarouselItem(row.photos)}
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample`+ row.id +`" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample`+ row.id +`" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <br>
                                                `+ row.description +`
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal`+ row.id +`" data-bs-whatever="@mdo">Contactez nous</button>
                                <div class="modal fade" id="exampleModal`+ row.id +`" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">A propos du véhicule `+ row.brand +` `+ row.model +`</h1>
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
                    `);
                });
            }
        }) 
    }
    $("#filterPrice, #filterKilometrage, #filterYear").change(function() {
        fetchData();
    });

    function getMainImage(photos) {
        if (photos) {
            let mainPhoto = photos.find(p => p.isMain);
            if (mainPhoto) {
                return mainPhoto.path;
            }
        }
        return '';
    }    

    function createCarouselItem(photos) {
        if(!photos) return '';
        let div = '';
        for (let i = 0; i < photos.length; i++) {
            div += `<div class="carousel-item ${i == 0 ? 'active' : ''}">
            <img src="${photos[i].path}" class="d-block w-100" alt="photo voiture 2">
            </div>\r\n`
        }
        return div;
    }

    fetchData(); 
})
