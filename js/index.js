function afficherStatutGarage() {
  let dateActuelle = new Date();
  let jourSemaine = dateActuelle.getDay();
  let heure = dateActuelle.getHours();

  if (jourSemaine === 0) {
    // Dimanche
    document.getElementById("garageStatus").textContent = "Le garage est fermé aujourd'hui. Ouverture demain à 8h.";
  } else if (jourSemaine === 6) {
    // Samedi
    if (heure >= 8 && heure < 12) {
      document.getElementById("garageStatus").textContent = "Le garage est ouvert aujourd'hui de 8h à 12h.";
    } else {
      document.getElementById("garageStatus").textContent = "Le garage est fermé aujourd'hui.";
    }
  } else {
    // Lundi à vendredi
    if (heure >= 8 && heure < 18) {
      document.getElementById("garageStatus").textContent = "Le garage est ouvert aujourd'hui de 8h à 18h.";
    } else {
      document.getElementById("garageStatus").textContent = "Le garage est fermé aujourd'hui.";
    }
  }
}

window.onload = function() {
  afficherStatutGarage();
};

