<?php
require('actions/loginAction.php');
include('./meta.php');

?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage"></a>
            <a href="index.php" class="back-index"> Retour à l'accueil</span></a>
        </div>
        </div>
    </nav>
</header>
<div class="container cnx">
    <form method="POST">

        <?php if (isset($errorMessage)) {
            echo '<p>' . $errorMessage . '</p>';
        } ?>

        <input type="text" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <button type="submit" name="connect" id="connect">Se connecter</button>
        <br>
        <a href="index.php" class="redirection">
            <p>Je suis pas employé du Garage Parrot, redirection vers la page principale.</p>
        </a>
    </form>
</div>
<?php
include('./footer.php');
?>