<?php

namespace Core\Middleware;
use Core\Session;

class Authenticated
{
    public function handle()
    {
        if (! Session::getId('user') ?? false) {
            header('location: /');
            exit();
        }
    }
}