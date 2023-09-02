document.addEventListener("DOMContentLoaded", function () {
    const serviceListElement = document.getElementById('serviceList');

    // Fonction pour mettre à jour l'affichage
    function updateServiceList(selectedServices) {
        serviceListElement.innerHTML = ''; 
        selectedServices.forEach(service => {
            const listItem = document.createElement('li');
            listItem.textContent = service;
            serviceListElement.appendChild(listItem);
        });
    }

    // Exemple de tableau de services cochés
    const selectedServices = ["Entretien et carosserie", "Révision", "Vidange", "Freinage", "Pneus et Géométrie", "Crévaison", "Climatisation", "Batterie", "Courroie de distribution"];
    updateServiceList(selectedServices);
});