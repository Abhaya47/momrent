<?php

namespace App\router;

class Router
{
    private array $routes = [];

    public function get(string $url, string $handler): void
    {
        $this->routes['GET'][$url] = $handler;
    }

    public function post(string $url, string $handler): void
    {
        $this->routes['POST'][$url] = $handler;
    }

    public function put(string $url, string $handler): void
    {
        $this->routes['PUT'][$url] = $handler;
    }

    public function patch(string $url, string $handler): void
    {
        $this->routes['PATCH'][$url] = $handler;
    }

    public function delete(string $url, string $handler): void
    {
        $this->routes['DELETE'][$url] = $handler;
    }

    public function handler(string $method, string $url): void
    {
        $handler = $this->routes[$method][$url] ?? null;
        if (is_null($handler)) {
            http_response_code(404);
            echo '404 Not Found';
            return;
        }
        [$controller, $action] = explode('@', $this->routes[$method][$url]);
        $instance = new $controller();
        $instance->$action();
    }

}