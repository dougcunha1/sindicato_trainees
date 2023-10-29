<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$dependente = $db->query('SELECT * FROM Dependentes WHERE dependente_id = :dependente_id', [
    'dependente_id' => $_GET['id']
])->findOrFail();

view("cadastro/edit_dependente.view.php", [
    'dependente' => $dependente
]);
