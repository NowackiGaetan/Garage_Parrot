<?php

function is_valid_password($mdp)
{
    // Vérifier la longueur
    if (strlen($mdp) < 10) {
        return false;
    }

    // Vérifier au moins 1 chiffre
    if (!preg_match('/\d/', $mdp)) {
        return false;
    }

    // Vérifier au moins 1 majuscule
    if (!preg_match('/[A-Z]/', $mdp)) {
        return false;
    }

    // Vérifier au moins 1 minuscule
    if (!preg_match('/[a-z]/', $mdp)) {
        return false;
    }

    // Vérifier au moins 1 caractère spécial
    if (!preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $mdp)) {
        return false;
    }

    return true;
}
