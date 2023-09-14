
$(document).ready(function(){
    function fetchData() {
        var filterPrice = $("#filterPrice").val();
        var filterKilometrage = $("#filterKilometrage").val();
        var filterYear = $("#filterYear").val();
        $.ajax({
            url: "data.php",
            method: "GET",
            data : {
                data: "fetch_data",
                filterPrice: filterPrice,
                filterKilometrage: filterKilometrage,
                filterYear: filterYear
            },
            dataType: "json",
            success: function(response){
                populateCarCards(response);
            }
        });
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

    function loadCarCardTemplate(row) {
        $.get("./car_card_template.php", function(template) {
                      template = template.replace("%%BRAND%%", row.brand)
                               .replace("%%MODEL%%", row.model)
                               .replace("%KILOMETRAGE%", row.kilometrage)
                               .replace("%FUEL%", row.fuel)
                               .replace("%YEAR%", row.year)
                               .replace("%PRICE%", row.price)
                               .replace("%DESCRIPTION%", row.description)
                               .replace("%PHOTO_PATH%", getMainImage(row.photos))
                               .replace(/%ID%/g, row.id)
                               .replace("%%CAROUSEL_ITEMS%%", createCarouselItem(row.photos)); 
                                                             
            $("#container-cars").append(template);
        });
    }

    function populateCarCards(response) {
        let res = $("#container-cars");
        res.empty();

        response.forEach(function(row){                    
            loadCarCardTemplate(row);
        });
    }

    function createCarouselItem(photos) {
        if (!photos || photos.length === 0) {
            return ''; 
        }
    
        let carouselItems = '';
    
        photos.forEach(function (photo, index) {
            
            const activeClass = index === 0 ? 'active' : '';
    
            carouselItems += `
                <div class="carousel-item ${activeClass}">
                    <img src="${photo.path}" class="d-block w-100" alt="Photo de voiture">
                </div>
            `;
        });
    
        return carouselItems;
    }

    fetchData(); 
});
