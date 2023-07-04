<?php
require ('meta.php');
require ('header.php');
?>
<div class="container-contact">
    <div class="container">
        <h5>Contactez-nous par mail:</h5>
        <form method="post" action="https://formspree.io/f/myyajbbj">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Ecrivez votre message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <div class="contact-tel">
        <h5>Où contactez-nous par téléphone au:</h5>
        <p>06.23.45.65.78</p>
    </div>

</div>