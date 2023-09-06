<form id="serviceForm" method="POST">
    <div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="ent-caro">Entretien et carosserie</label>
            <input type="checkbox" class="check-service" id="ent-caro" name='ent-caro' value="ent-caro">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="revision">Révision du véhicule</label>
            <input type="checkbox" class="check-service" id="revision" name='revision' value="revision">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="vidange">Vidange</label>
            <input type="checkbox" class="check-service" id="vidange" name="vidange" value="vidange">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="freinage">Freinage</label>
            <input type="checkbox" class="check-service" id="freinage" name="freinage" value="freinage">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="pneu-geo">Pneus et géometrie</label>
            <input type="checkbox" class="check-service" id="pneu-geo" name="pneu-geo" value="pneu-geo">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="crevaison">Réparation et crevaison</label>
            <input type="checkbox" class="check-service" id="crevaison" name="crevaison" value="crevaison">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="climatisation">Climatisation</label>
            <input type="checkbox" class="check-service" id="climatisation" name="climatisation" value="climatisation">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="batterie">Batterie</label>
            <input type="checkbox" class="check-service" id="batterie" name="batterie" value="batterie">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="distribution">Courroie de distribution</label>
            <input type="checkbox" class="check-service" id="distribution" name="distribution" value="distribution">
        </div>
        <div style="text-align:center">
            <button type="button" id="saveButton" class="btn btn-success" name="savebutton">Sauvegarder les services</button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/save-services.js"></script>