<form id="serviceForm">
    <div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="ent-caro">Entretien et carosserie</label>
            <input type="checkbox" class="check-service" id="ent-caro" name="services" value="ent-caro" data-service="Entretien et carosserie">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="revision">Révision du véhicule</label>
            <input type="checkbox" id="revision" name="services" value="revision" data-service="Révision">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="vidange">Vidange</label>
            <input type="checkbox" id="vidange" name="services" value="vidange" data-service="Vidange">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="freinage">Freinage</label>
            <input type="checkbox" class="check-service" id="freinage" name="services" value="freinage" data-service="Freinage">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="pneu-geo">Pneus et géometrie</label>
            <input type="checkbox" class="check-service" id="pneu-geo" name="services" value="pneu-geo" data-service="Pneus et géométrie">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="crevaison">Réparation et crevaison</label>
            <input type="checkbox" class="check-service" id="crevaison" name="services" value="crevaison" data-service="Crevaison">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="climatisation">Climatisation</label>
            <input type="checkbox" class="check-service" id="climatisation" name="services" value="climatisation" data-service="Climatisation">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="batterie">Batterie</label>
            <input type="checkbox" class="check-service" id="batterie" name="services" value="batterie" data-service="Batterie">
        </div>
        <div style="display: flex; align-items: center">
            <label style="width:50%" for="distribution">Courroie de distribution</label>
            <input type="checkbox" class="check-service" id="distribution" name="services" value="distribution" data-service="Courroie de distribution">
        </div>
        <div style="text-align:center">
            <button type="button" id="saveButton" class="btn btn-success" id="services">Sauvegarder les services</button>
        </div>
        <div>
            <br><br>
            <h2 style="text-align:center">Ajouter un nouveau service</h2>
            <div class="carAdd addServiceForm">
                <form id="addServiceForm">
                    <input type="text" id="newService" name="newService">
                    <div style="text-align:center">
                        <button type="button" id="addServiceButton" class="btn btn-success" id="newService">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>

<script src="js/services.js"></script>