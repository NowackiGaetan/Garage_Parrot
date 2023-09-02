function getHoraires(){
    fetch('get_horaires.php')
    .then(response => response.json())
    .then(data=>{
        const horairesDiv = document.getElementById('horaires');
        for(const horaire of data){
            const horaireFooter = document.createElement('p');
            horaireFooter.textContent = `${horaire.jour_semaine}: ${horaire.horaire}`;
            horairesDiv.appendChild(horaireFooter);
        }
    })
    .catch(error=>console.log(error))
}

window.onload = getHoraires;