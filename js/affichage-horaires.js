$(document).ready(function () {
    const horairesContainer = $('#horaires-container');

    $.ajax({
        url: 'affichage-horaires.php',
        type: 'GET',
        dataType: 'json',
        success: function (dataHoraires) {
            horairesContainer.empty();

            for (let i = 0; i < dataHoraires.length; i++) {
                const item = dataHoraires[i];
                const divElement = $('<div>');

                if (item.jour_semaine === 'Samedi') {
                    divElement.text(`${item.jour_semaine}: ${item.horaire_ouverture_matin_format} - ${item.horaire_fermeture_matin_format} , Fermé l'après-midi`);
                } else if (item.jour_semaine === 'Dimanche') {
                    divElement.text(`${item.jour_semaine}: Fermé`);
                } else {
                    divElement.text(`${item.jour_semaine}: ${item.horaire_ouverture_matin_format} - ${item.horaire_fermeture_matin_format}, ${item.horaire_ouverture_aprem_format} - ${item.horaire_fermeture_aprem_format}`);
                }

                horairesContainer.append(divElement);
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});
