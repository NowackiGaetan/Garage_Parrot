function sauvegarderHoraires() {
    
    var jour_semaine = document.getElementById("jour_semaine").value;
    var horaire_ouverture_matin = document.getElementById("horaire_ouverture_matin").value;
    var horaire_fermeture_matin = document.getElementById("horaire_fermeture_matin").value;
    var horaire_ouverture_aprem = document.getElementById("horaire_ouverture_aprem").value;
    var horaire_fermeture_aprem = document.getElementById("horaire_fermeture_aprem").value;

    $.ajax({
        url: './get_horaires.php', 
        method: 'POST',
        data: {
            jour_semaine: jour_semaine,
            horaire_ouverture_matin: horaire_ouverture_matin,
            horaire_fermeture_matin: horaire_fermeture_matin,
            horaire_ouverture_aprem: horaire_ouverture_aprem,
            horaire_fermeture_aprem: horaire_fermeture_aprem
        },
        success: function (response) {
            function showSuccessMessage(message) {
                var successMessage = document.getElementById("message-success");
                successMessage.textContent = message;
                successMessage.style.backgroundColor = "#4CAF50"; 
                successMessage.style.display = "block"; 
                setTimeout(function () {
                    successMessage.style.display = "none"; 
                }, 3000); 
            }
            
            // Utilisation
            showSuccessMessage("Horaires sauvegardés avec succès !");
            
        }
    });
}

