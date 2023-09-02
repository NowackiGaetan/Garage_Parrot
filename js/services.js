document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton");
    const serviceForm = document.getElementById("serviceForm");
    const addServiceButton = document.getElementById("addServiceButton");
    const newServiceInput = document.getElementById("newService");

    saveButton.addEventListener("click", function () {
        const selectedServices = Array.from(serviceForm.querySelectorAll('input[type="checkbox"]:checked'))
            .map(checkbox => checkbox.value);

        // Envoi des services sélectionnés au backend
        fetch("envoi-service.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ services: selectedServices }),
        })
        .then(response => response.json())
        .then(data => {
            // Gérer la réponse du backend si nécessaire
            console.log("Réponse du backend :", data);
        })
        .catch(error => {
            console.error("Erreur lors de l'envoi au backend :", error);
        });
    });

    addServiceButton.addEventListener("click", function () {
        const newService = newServiceInput.value;

        // Envoi du nouveau service au backend
        fetch("envoi-service.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ newService: newService }),
        })
        .then(response => response.json())
        .then(data => {
            // Gérer la réponse du backend si nécessaire
            console.log("Réponse du backend :", data);
        })
        .catch(error => {
            console.error("Erreur lors de l'ajout de service :", error);
        });
    });
});

// document.addEventListener("DOMContentLoaded", function () {
//     const serviceCheckboxes = document.querySelectorAll('.check-service');
//     const selectedServices = [];

//     serviceCheckboxes.forEach(checkbox => {
//         checkbox.addEventListener('change', function () {
//             const serviceName = checkbox.getAttribute('data-service');
//             if (checkbox.checked) {
//                 selectedServices.push(serviceName);
//             } else {
//                 const index = selectedServices.indexOf(serviceName);
//                 if (index > -1) {
//                     selectedServices.splice(index, 1);
//                 }
//             }
//         });
//     });

//     const saveButton = document.querySelector('#saveButton');
//     saveButton.addEventListener('click', function () {
//         console.log(selectedServices);
//     });
// });