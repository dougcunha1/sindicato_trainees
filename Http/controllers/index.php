<?php

use Core\Session;

$getUserSession = Session::getId('user');

view("index.view.php", [
    'heading' => 'Página inicial',
    'getUserSession' => $getUserSession
]);