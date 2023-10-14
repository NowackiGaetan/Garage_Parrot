<?php
require('data.php');
require('meta.php');
?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage"></a>
            <a href="pageAdmin.php" class="back-index"> Retour à la page précédente</span></a>
        </div>
        </div>
    </nav>
</header>
<div id="container-cars-admin" class="container-cars"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/list-cars-admin.js"></script>
<script src="./js/deletecar.js"></script>