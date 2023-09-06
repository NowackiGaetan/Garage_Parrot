$(document).ready(function() {
    // Lorsque l'utilisateur clique sur le bouton "Enregistrer"
    $("#saveButton").click(function() {
        console.log("bouton sauvegarder cliqué");
        let data = {};
        console.log(data);
        let servicesCheck = $(".check-service");
        console.log(servicesCheck.length)
        
        // Parcourez toutes les cases à cocher
        $(servicesCheck).each(function() {
            var service_name = $(this).attr("name");
            console.log(service_name)
            var service_value = $(this).prop("checked") ? 1 : 0;
            
            data[service_name] = service_value;
            console.log(data[service_name]);
        });
        console.log(data);

        // Envoyez une requête Ajax pour mettre à jour la base de données
        $.ajax({
            type: "POST",
            url: "./envoi-service.php", // Remplacez par le chemin vers votre script de mise à jour
            data: data,
            success: function(response) {
                console.log(response); // Affichez la réponse de votre script (peut être utile pour le débogage)
            }
        });
    });
});

