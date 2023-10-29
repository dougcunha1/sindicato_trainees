<?php

use Core\App;
use Core\Database;
use Core\Validator;



$db = App::resolve(Database::class);

$filiado_usuario = $_POST['filiado_usuario'];
$filiado_tipo_conta = $_POST['filiado_tipo_conta'];
$filiado_senha = $_POST['filiado_senha'];
$filiado_nome = $_POST['filiado_nome'];
$filiado_cpf = $_POST['filiado_cpf'];
$filiado_rg = $_POST['filiado_rg'];
$filiado_data_nascimento = $_POST['filiado_data_nascimento'];
$filiado_empresa = $_POST['filiado_empresa'];
$filiado_cargo = $_POST['filiado_cargo'];
$filiado_situacao = $_POST['filiado_situacao'];
$filiado_telefone_residencial = $_POST['filiado_telefone_residencial'];
$filiado_celular = $_POST['filiado_celular'];

// Procura se o usuário ja existe
$filiado = $db->query('SELECT * FROM Filiados WHERE filiado_id = :filiado_id', [
    'filiado_id' => $_POST['filiado_id']
])->findOrFail();

$errors = [];

if (!Validator::email($filiado_usuario)) {
   $errors['filiado_usuario'] = 'Por favor, fornerça um email válido.';
}

if (! empty($filiado_senha)) {
    if (!Validator::string($filiado_senha, 6, 255)) {
        $errors['filiado_senha'] = 'Por favor, digite uma senha de no mínimo seis caracteres.';
    }
}

if (!Validator::string($filiado_nome, 1, 255)) {
    $errors['filiado_nome'] = 'Por favor, digite um nome válido.';
}

if (!Validator::cpf($filiado_cpf)) {
    $errors['filiado_cpf'] = 'Por favor, digite um CPF válido.';
}

if (!Validator::string($filiado_rg, 9, 12)) {
    $errors['filiado_rg'] = 'Por favor, digite um RG válido.';
}

if (! empty($errors)) {
    return view('edit/edit.view.php', [
        'errors' => $errors
    ]);
}


if ($user) {
    $errors['filiado_usuario'] = 'Este email já está em uso.';

    return view('edit/edit.view.php', [
        'errors' => $errors
    ]);
} else {

    if (!empty($filiado_senha)) {
        $user = $db->query('UPDATE Filiados SET 
            filiado_usuario = :filiado_usuario, 
            filiado_tipo_conta = :filiado_tipo_conta, 
            filiado_senha = :filiado_senha, 
            filiado_nome = :filiado_nome, 
            filiado_cpf = :filiado_cpf, 
            filiado_rg = :filiado_rg, 
            filiado_data_nascimento = :filiado_data_nascimento, 
            filiado_idade = :filiado_idade, 
            filiado_empresa = :filiado_empresa, 
            filiado_cargo = :filiado_cargo, 
            filiado_situacao = :filiado_situacao, 
            filiado_telefone_residencial = :filiado_telefone_residencial, 
            filiado_celular = :filiado_celular WHERE filiado_id = :filiado_id', [
            'filiado_usuario' => $filiado_usuario,
            'filiado_tipo_conta' => $filiado_tipo_conta,
            'filiado_senha' => password_hash($filiado_senha, PASSWORD_DEFAULT),
            'filiado_nome' => $filiado_nome,
            'filiado_cpf' => $filiado_cpf,
            'filiado_rg' => $filiado_rg,
            'filiado_data_nascimento' => $filiado_data_nascimento,
            'filiado_idade' => age($filiado_data_nascimento),
            'filiado_empresa' => $filiado_empresa,
            'filiado_cargo' => $filiado_cargo,
            'filiado_situacao' => $filiado_situacao,
            'filiado_telefone_residencial' => $filiado_telefone_residencial,
            'filiado_celular' => $filiado_celular,
            'filiado_id' => $_POST['filiado_id']
        ]);
    }

    $user = $db->query('UPDATE Filiados SET 
        filiado_usuario = :filiado_usuario, 
        filiado_tipo_conta = :filiado_tipo_conta, 
        filiado_nome = :filiado_nome, 
        filiado_cpf = :filiado_cpf, 
        filiado_rg = :filiado_rg, 
        filiado_data_nascimento = :filiado_data_nascimento, 
        filiado_idade = :filiado_idade, 
        filiado_empresa = :filiado_empresa, 
        filiado_cargo = :filiado_cargo, 
        filiado_situacao = :filiado_situacao, 
        filiado_telefone_residencial = :filiado_telefone_residencial, 
        filiado_celular = :filiado_celular WHERE filiado_id = :filiado_id', [
        'filiado_usuario' => $filiado_usuario,
        'filiado_tipo_conta' => $filiado_tipo_conta,
        'filiado_nome' => $filiado_nome,
        'filiado_cpf' => $filiado_cpf,
        'filiado_rg' => $filiado_rg,
        'filiado_data_nascimento' => $filiado_data_nascimento,
        'filiado_idade' => age($filiado_data_nascimento),
        'filiado_empresa' => $filiado_empresa,
        'filiado_cargo' => $filiado_cargo,
        'filiado_situacao' => $filiado_situacao,
        'filiado_telefone_residencial' => $filiado_telefone_residencial,
        'filiado_celular' => $filiado_celular,
        'filiado_id' => $_POST['filiado_id']
    ]);

    redirect('/filiados');
}
