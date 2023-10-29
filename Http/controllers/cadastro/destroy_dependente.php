<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$dependente = $db->query('SELECT * FROM Dependentes WHERE dependente_id = :dependente_id', [
    'dependente_id' => $_GET['id']
])->findOrFail();


$result = $db->query('DELETE FROM Dependentes WHERE dependente_id = :dependente_id', [
    'dependente_id' => $_GET['id']
]);

redirect('/filiados');
