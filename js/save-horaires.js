document.getElementById("formulaireHoraires").addEventListener("submit", function(event){
    event.preventDefault();

    const horaires = {
        lundi: document.getElementById("lundi").value,
        mardi: document.getElementById("mardi").value,
        mercredi: document.getElementById("mercredi").value,
        jeudi: document.getElementById("jeudi").value,
        vendredi: document.getElementById("vendredi").value,
        samedi: document.getElementById("samedi").value,
        dimanche: document.getElementById("dimanche").value
    }
    console.log("Horaires sauvegardés", horaires);
    alert("Horaires sauvegardés avec succès");
})