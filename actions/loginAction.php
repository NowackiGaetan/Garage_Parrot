<?php
require('actions/database.php');

//Validation du formulaire
if (isset($_POST['connect'])) {
    //Verifie si les champs sont remplis
    if (!empty($_POST['email'] && !empty($_POST['password']))) {

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        //Verification de l'existence de l'utilisateur
        $checkIsUserExists = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $checkIsUserExists->execute(array($user_email));

        if ($checkIsUserExists->rowCount() > 0) {


            //Recupération des données de l'utilisateur
            $userInfos = $checkIsUserExists->fetch();

            //Authentification de l'utilisateur
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['email'] = $userInfos['email'];

            //Redirection
            if ($userInfos['id'] == 1) {
                header('Location: pageAdmin.php');
            } else {
                header('Location: pageEmploye.php');
            }
        } else {
            $errorMessage = "Votre mot de passe est incorrect";
        }
    } else {
        $errorMessage = "Votre email  est incorrect";
    }
} else {
    $errorMessage = "Veuillez compléter tous les champs...";
}
