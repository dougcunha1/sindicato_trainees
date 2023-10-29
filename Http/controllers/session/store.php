<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['filiado_usuario'],
    'password' => $_POST['filiado_senha']
]);


$signedIn = (new Authenticator)->attempt(
    $attributes['email'], $attributes['password']
);

if (!$signedIn) {
    $form->error(
        'email', 'Não foi encontrado nenhuma conta com o respectivo email e senha.'
    )->throw();
}

redirect('/');
