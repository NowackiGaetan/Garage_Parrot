<?php
require ('actions/database.php');

//Validation du formulaire
if(isset($_POST['connect'])){
    //Verifie si les champs sont remplis
    if(!empty($_POST['email'] && !empty($_POST['password']))){

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        //On ne crypte pas le mot de passe, on veut juste vérifier si le mot de passe est correct
        $user_password = htmlspecialchars($_POST['password']);

        //Verification de l'existence de l'utilisateur
        $checkIsUserExists= $pdo->prepare('SELECT email FROM users WHERE email = ?');
        $checkIsUserExists->execute(array($user_email));

        if($checkIsUserExists->rowCount() > 0 ){

            
            //Recupération des données de l'utilisateur
            $userInfos = $checkIsUserExists->fetch((PDO::FETCH_ASSOC));
            //Verification du mot passe
            if(password_verify($user_password, $userInfos['password'])){

                //Authentification de l'utilisateur
                $_SESSION['auth']= true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['email'] = $userInfos['email'];

                //Redirection
                header('Location: index.php');

            }else{
                $errorMessage="Votre mot de passe est incorrect";
            }   

        }else{
            $errorMessage = "Votre email est incorrect";
        }


    }else{
        $errorMessage = "Veuillez compléter tous les champs...";
    }

}