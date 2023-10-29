<?php

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$dependente_nome = $_POST['dependente_nome'];
$dependente_data_nascimento = $_POST['dependente_data_nascimento'];
$dependente_grau_parentesco = $_POST['dependente_grau_parentesco'];

$dependente = $db->query('SELECT * FROM Dependentes WHERE dependente_id = :dependente_id', [
    'dependente_id' => $_POST['dependente_id']
])->findOrFail();

$errors = [];

if (!Validator::string($dependente_nome, 1, 255)) {
    $errors['dependente_nome'] = 'Por favor, digite um nome válido.';
}

if (!Validator::string($dependente_grau_parentesco, 1, 255)) {
    $errors['dependente_grau_parentesco'] = 'Por favor, digite um parentesco válido.';
}

if (! empty($errors)) {
    return view('edit/dependente/edit_dependente.view.php', [
        'errors' => $errors
    ]);
}

if ($dependente) {
    $user = $db->query('UPDATE Dependentes SET dependente_nome = :dependente_nome, dependente_data_nascimento = :dependente_data_nascimento, dependente_grau_parentesco = :dependente_grau_parentesco WHERE dependente_id = :dependente_id', [
        'dependente_nome' => $dependente_nome,
        'dependente_data_nascimento' => $dependente_data_nascimento,
        'dependente_grau_parentesco' => $dependente_grau_parentesco,
        'dependente_id' => $_POST['dependente_id']
    ]);
}

redirect("/filiados");
