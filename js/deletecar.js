console.log("Document ready in deletecar.js");
$(document).ready(function() {
    $(".box-card").on("click", ".box-card #deletecar", function() {
        console.log("Bouton 'Supprimer' cliqué !");
        let carCard = $(this).closest(".box-card");
        let id = carCard.data("id");
        console.log(id);
        $.ajax({
            type: "POST",
            url: "deletecar.php",
            data: { id: id },
            success: function(response) {
                if (response === "success") {
                    carCard.remove(); 
                } else {
                    alert("Erreur lors de la suppression : " + response);
                }
            }
        });
    });
});
