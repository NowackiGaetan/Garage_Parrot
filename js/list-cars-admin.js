console.log("Document ready");
$(document).ready(function(){
    function fetchData() {
        var filterPrice = $("#filterPrice").val();
        var filterKilometrage = $("#filterKilometrage").val();
        var filterYear = $("#filterYear").val();
        $.ajax({
            url: "filters-cars.php",
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
        $.get("./car-template-admin.php", function(template) {
                      template = template.replace("%%BRAND%%", row.brand)
                               .replace("%%MODEL%%", row.model)
                               .replace("%KILOMETRAGE%", row.kilometrage)
                               .replace("%FUEL%", row.fuel)
                               .replace("%YEAR%", row.year)
                               .replace("%PRICE%", row.price)
                               .replace("%PHOTO_PATH%", getMainImage(row.photos))
                               .replace(/%ID%/g, row.id)

                                                             
            $("#container-cars-admin").append(template);
        });
    }

    function populateCarCards(response) {
        let res = $("#container-cars-admin");
        res.empty();

        response.forEach(function(row){                    
            loadCarCardTemplate(row);
        });
    }

    $("#container-cars-admin").on("click", ".deletecar", function() {
        let carCard = $(this).closest(".box-card");
        let id = carCard.data("id");
        $.ajax({
            type: "POST",
            url: "deletecar.php",
            data: { id: id },
            success: function(response) {
                if (response === "success") {
                    carCard.remove(); 
                } else {
                    alert(response);
                    carCard.remove();
                }
            }
        });
    });

    fetchData(); 
});
