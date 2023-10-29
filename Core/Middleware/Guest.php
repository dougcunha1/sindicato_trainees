<?php

namespace Core\Middleware;
use Core\Session;

class Guest
{
    public function handle()
    {
        if (Session::getId('user') ?? false) {
            header('location: /');
            exit();
        }
    }
}