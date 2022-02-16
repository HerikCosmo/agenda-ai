<?php

namespace App\Controller;

class Logout implements HandleInterface
{
    public function handle(): void
    {
        session_destroy();

        header('location: /login');
        exit;
    }
}