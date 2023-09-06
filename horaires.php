<form id="horairesForm">
    <label for="jour_semaine">Jour de la semaine :</label>
    <select id="jour_semaine" name="jour_semaine">
        <option value="Lundi">Lundi</option>
        <option value="Mardi">Mardi</option>
        <option value="Mercredi">Mercredi</option>
        <option value="Jeudi">Jeudi</option>
        <option value="Vendredi">Vendredi</option>
        <option value="Samedi">Samedi</option>
        <option value="Dimanche">Dimanche</option>
    </select><br><br>

    <label for="horaire_ouverture_matin">Horaire d'ouverture (matin) :</label>
    <input type="time" id="horaire_ouverture_matin" name="horaire_ouverture_matin"><br><br>

    <label for="horaire_fermeture_matin">Horaire de fermeture (matin) :</label>
    <input type="time" id="horaire_fermeture_matin" name="horaire_fermeture_matin"><br><br>

    <label for="horaire_ouverture_aprem">Horaire d'ouverture (après-midi) :</label>
    <input type="time" id="horaire_ouverture_aprem" name="horaire_ouverture_aprem"><br><br>

    <label for="horaire_fermeture_aprem">Horaire de fermeture (après-midi) :</label>
    <input type="time" id="horaire_fermeture_aprem" name="horaire_fermeture_aprem"><br><br>

    <div style="text-align:center">
        <button type="button" class="btn btn-success" onclick="sauvegarderHoraires()">Sauvegarder les horaires</button>
    </div>
</form>
<div id="message-success" class="hidden">Horaires sauvegardés avec succès !</div>
<script src="./js/save-horaires.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>