<?php
include('meta.php');
include('envoi-service.php');
?>

<div class="mecanic">
    <div class="garagiste-div">
        <img src="assets/garage1.jpg" alt="image d'un garagiste" class="garagiste" id="list-services">
    </div>
    <div class="services">
        <h3>Services</h3>
        <div class="list-services">
            <ul>
                <li>Entretien et carosserie</li>
                <li>Révision du véhicule</li>
                <li>Vidange</li>
            </ul>
            <ul>
                <li>Freinage</li>
                <li>Pneus et géometrie</li>
                <li>Réparation et crevaison</li>
            </ul>
            <ul>
                <li>Climatisation</li>
                <li>Batterie</li>
                <li>Courroie de distribution</li>
            </ul>
        </div>
        <h1>Services</h1>
        <ul>
            <?php
            foreach ($services as $service) : ?>
                <li><?php echo $service; ?></li>
            <?php endforeach; ?>
        </ul>
        <div>
            <ul id="serviceList"></ul>
        </div>
    </div>
</div>
<br>