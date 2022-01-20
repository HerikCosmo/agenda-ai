<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    public static function getUser(string $email, string $senha)
    {
        $user = new User();
        $user->email = $email;
        $user->senha = $senha;
        
        return $user->selectByEmailAndPassword();
    }
}