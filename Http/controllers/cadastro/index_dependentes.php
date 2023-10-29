<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$dependentes = $db->query('SELECT * FROM Dependentes WHERE filiado_id = :filiado_id', [
    'filiado_id' => $_GET['filiado_id']
])->get();

view("cadastro/index_dependentes.view.php", [
    'heading' => 'Filiados Cadastrados',
    'dependentes' => $dependentes
]);