<?php

namespace App\Controller;

class UserController
{
    public function showProfile($userId)
    {
        echo "Affichage du profil de l'utilisateur avec l'ID : $userId\n";
    }
}