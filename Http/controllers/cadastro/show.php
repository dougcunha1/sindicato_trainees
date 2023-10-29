<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$filiado = $db->query('SELECT * FROM Filiados WHERE filiado_id = :filiado_id', [
    'filiado_id' => $_GET['id']
])->findOrFail();

view("cadastro/show.view.php", [
    'filiado' => $filiado
]);