$(document).ready(function () {
    const servicesContainer = $('#services-container');

    $.ajax({
        url: './affichage-services.php',
        type: 'GET',
        dataType: 'json',
        success: function (dataServices) {
            servicesContainer.empty();

            for (let i = 0; i < dataServices.length; i++) {
                const service = dataServices[i];
                const serviceElement = $('<li>').text(service.service_description);
                servicesContainer.append(serviceElement);
            }
        },
        error: function (xhr, status, error) {
            console.error('Erreur lors de la requête : ' + error);
        }
    });
});

