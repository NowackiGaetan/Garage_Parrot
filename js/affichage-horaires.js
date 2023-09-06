document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner la div où vous voulez afficher les données
    const horairesContainer = document.getElementById('horaires-container');

    // Effectuer une requête AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'affichage-horaires.php', true);

    // Définir le gestionnaire d'événements pour la réponse AJAX
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Analyser la réponse JSON
            const dataHoraires = JSON.parse(xhr.responseText);

            // Afficher les données dans la div
            horairesContainer.innerHTML = '';

            for (let i = 0; i < dataHoraires.length; i++) {
                const item = dataHoraires[i];
                const divElement = document.createElement('div');
                if (item.jour_semaine === 'Samedi') {
                    divElement.textContent = `${item.jour_semaine}: ${item.horaire_ouverture_matin_format} - ${item.horaire_fermeture_matin_format} , Fermé l'après-midi`;
                } else if (item.jour_semaine === 'Dimanche') {
                    divElement.textContent = `${item.jour_semaine}: Fermé`;
                } else {
                    divElement.textContent = `${item.jour_semaine}: ${item.horaire_ouverture_matin_format} - ${item.horaire_fermeture_matin_format}, ${item.horaire_ouverture_aprem_format} - ${item.horaire_fermeture_aprem_format}`;
                }                horairesContainer.appendChild(divElement);
            }
        }
    };

    // Envoyer la requête
    xhr.send();
});