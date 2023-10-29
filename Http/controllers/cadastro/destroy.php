<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$filiados = $db->query('SELECT * FROM Filiados WHERE filiado_id = :filiado_id', [
    'filiado_id' => $_GET['id']
])->findOrFail();


$result = $db->query('DELETE FROM Filiados WHERE filiado_id = :filiado_id', [
    'filiado_id' => $_GET['id']
]);


redirect('/filiados');
