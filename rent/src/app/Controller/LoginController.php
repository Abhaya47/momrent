<?php

namespace App\app\Controller;

use App\router\Response;

class LoginController
{
    public function login(): void
    {
        Response::json("logged in",200);
    }
}