document.addEventListener("DOMContentLoaded", function () {
    const servicesContainer = document.getElementById('services-container');

    const xhr = new XMLHttpRequest();
    xhr.open('GET', './affichage-services.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                try {
                    // Essayer de parser la réponse JSON
                    const dataServices = JSON.parse(xhr.responseText);

                    // Efface le contenu actuel de la div
                    servicesContainer.innerHTML = '';

                    // Affiche les services dans la div
                    for (let i = 0; i < dataServices.length; i++) {
                        const service = dataServices[i];
                    // responseData.forEach(function (service) {
                        const serviceElement = document.createElement('li');
                        serviceElement.textContent = service.service_description;
                        servicesContainer.appendChild(serviceElement);
                    };
                    console.log(dataServices)
                } catch (e) {
                    // En cas d'erreur de parsing JSON
                    console.error('Erreur lors de l\'analyse de la réponse JSON : ' + e.message);
                }
            } else {
                // La requête a échoué
                console.error('Erreur lors de la requête : ' + xhr.status);
            }
        }
    };

    // Envoyer la requête
    xhr.send();
});

