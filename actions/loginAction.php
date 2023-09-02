<?php
require('actions/database.php');


//Validation du formulaire
if (isset($_POST['connect'])) {
    //Verifie si les champs sont remplis
    if (!empty($_POST['email'] && !empty($_POST['password']))) {

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        function is_valid_password($user_password)
        {
            // Vérifier la longueur
            if (strlen($user_password) < 10) {
                return false;
            }

            // Vérifier au moins 1 chiffre
            if (!preg_match('/\d/', $user_password)) {
                return false;
            }

            // Vérifier au moins 1 majuscule
            if (!preg_match('/[A-Z]/', $user_password)) {
                return false;
            }

            // Vérifier au moins 1 minuscule
            if (!preg_match('/[a-z]/', $user_password)) {
                return false;
            }

            // Vérifier au moins 1 caractère spécial
            if (!preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $user_password)) {
                return false;
            }

            // Si toutes les conditions sont satisfaites, le mot de passe est valide
            return true;
        }

        $user_password = htmlspecialchars($_POST['password']);

        //Verification de l'existence de l'utilisateur
        $checkIsUserExists = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $checkIsUserExists->execute(array($user_email));

        if ($checkIsUserExists->rowCount() > 0) {

            //Recupération des données de l'utilisateur
            $userInfos = $checkIsUserExists->fetch();
            $hashedPassword = $userInfos['password'];
            if (password_verify($user_password, $hashedPassword)) {
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
}
