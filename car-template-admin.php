<div class="card-h-100 box-card" data-id="%ID%">
    <div class="card active">
        <p>%ID%</p>
        <div class="div-img-car">
            <img src="%PHOTO_PATH%" class="card-img-top" alt="image-voiture">
        </div>
        <div class="card-body">
            <h5 class="card-title">%%BRAND%% %%MODEL%%</h5>
            <div class="description-cars">
                <div class="description-left">
                    <p class="card-text">
                        %KILOMETRAGE% km<br>%FUEL%<br>%YEAR%<br>
                    </p>
                </div>
                <div class="description-right">
                    <p class="prices">%PRICE% €</p>
                </div>
            </div>
            <br><br>
            <div class="details">
                <form method="POST" action="">
                    <input type="hidden" name="deletecarInput" value="%ID%">
                    <button type="button" class="btn btn-danger deletecar" name="deletecar" id="deletecar">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="./js/deletecar.js"></script>