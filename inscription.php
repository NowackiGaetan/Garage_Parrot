<?php
require('actions/loginAction.php');
require('meta.php');
require('actions/securepassword.php');

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

<?php

if (isset($_POST['envoi'])) {
    if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
        $email = htmlspecialchars($_POST['email']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

        function add_user($pdo, $email, $mdp)
        {
            if (is_valid_password($_POST['mdp'])) {

                $insertUser = $pdo->prepare("INSERT INTO users(email, password) VALUES (? , ?)");
                $insertUser->execute(array($email, $mdp));

                if ($insertUser) {
                    echo '<div class="alert alert-success" role="alert">Le compte a bien été créé</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Le compte n\'a pas été créé</div>';
                }

                $recupUser = $pdo->prepare("SELECT * FROM users WHERE email =? AND password =?");
                $recupUser->execute(array($email, $mdp));
                if ($recupUser->rowCount() > 0) {
                    $_SESSION['email'] = $email;
                    $_SESSION['mdp'] = $mdp;
                    $_SESSION['id'] = $recupUser->fetch(PDO::FETCH_ASSOC)['id'];
                }
            } else {
                echo "Le mot de passe ne respecte pas les critères.";
            }
        }

        add_user($pdo, $email, $mdp);
    } else {
        echo "Veuillez remplir tous les champs...";
    }
}
?>

<div class="container container-inscription">
    <form method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <br>
        <input class="btn btn-primary" type="submit" value="Inscription de l'employé" name="envoi">
    </form>
</div>