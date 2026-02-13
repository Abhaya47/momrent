<?php

namespace App\router;

class Response
{

    public static function json($message, int $status = 200): void
    {
        http_response_code($status);
        echo json_encode($message, $status);
    }
}