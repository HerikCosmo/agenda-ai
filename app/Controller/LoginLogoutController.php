<?php

namespace App\Controller;

class LoginLogoutController implements HandleInterface
{
    public function handle(): void
    {
        session_destroy();

        header('location: /login');
        exit;
    }
}