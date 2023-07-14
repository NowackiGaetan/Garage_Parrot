let hourOpen = 8;
let hourClose = 18;

function getHourNow() {
  let now = new Date();
  let hour = now.getHours();

  if (minutes < 10) {
    minutes = "0" + minutes; 
  }
return hour + ":" + minutes;
}

function garageOpen(){
  let hourNow = new Date().getHours();
  let dayNow = new Date().getDay();

  if((dayNow === 0 || dayNow === 6) || (dayNow === 5 && hourNow < hourClose) || (hourNow >= hourOpen && hourNow < hourClose)){
    return true;
  }else{
    return false;
  }
}

function garageStatus(){
  let garageStatusElement = document.getElementById('garageStatus');
  let statut = garageOpen() ? "ouvert" : "fermé";
  let horaires = "Heure d'ouverture : " + hourOpen +"h - " + hourClose +"h." ;

  garageStatusElement.textContent = "Le garage V.Parrot est actuellement " + statut + " | " + horaires;
}

garageStatus();
