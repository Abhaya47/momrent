<?php

namespace App\router;

use App\app\Controller\LoginController;
use App\app\Controller\UserController;

class Routes
{
    /**
     * @param Router $router
     * @return void
     */
    public function routes(Router $router): void
    {
        $router->post('/login', LoginController::class . '@login');

        $router->get('/home', UserController::class . '@index');
        $router->post('/home', UserController::class . '@store');
        $router->delete('/home/{id}', UserController::class . '@destroy');
        $router->put('/home/{id}', UserController::class . '@update');
    }
}