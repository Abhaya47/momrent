<?php

namespace App\router;

class Request
{

    /**
     * @return string
     */
    public function url(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * @return string
     */
    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}