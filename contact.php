<?php
require('meta.php');

?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage"></a>
        </div>
        </div>
    </nav>
</header>
<div class="container-contact">
    <div class="container">
        <h5>Contactez-nous:</h5>
        <form method="post" action="https://formspree.io/f/myyajbbj">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prénom:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse Email:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Téléphone:</label>
                <input type="tel" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ecrivez votre message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div style="text-align:center">
                <button type="submit" class="btn btn-warning">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="contact-tel">
        <h5>Où contactez-nous par téléphone au:</h5>
        <p>06.23.45.65.78</p>
        <br><br>
        <a href="index.php">Revenir à la page d'accueil</a>
    </div>

</div>