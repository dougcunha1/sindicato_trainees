<?php

namespace Core\Middleware;
use Core\Session;

class Admin
{
    public function handle()
    {
        if (Session::getId('user_tipo_conta') != 'A' ?? false) {
            header('location: /');
            exit();
        }
    }
}