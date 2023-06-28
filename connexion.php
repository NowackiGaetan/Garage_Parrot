<?php
require('actions/loginAction.php');
include('./meta.php');
include ("./header.php");
?>
<div class="cnx">
    <form method="POST">

        <?php if(isset($errorMessage)){ echo '<p>'.$errorMessage.'</p>'; }?>

        <input type="text" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        <button type="submit" name="connect" id="connect">Se connecter</button>
        <br>
        <a href="index.php" class="redirection"><p>Je suis pas employé du Garage Parrot, redirection vers la page principale.</p></a>
    </form>
</div>
<?php
include ('./footer.php');
?>