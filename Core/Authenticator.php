<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('SELECT * FROM Filiados WHERE filiado_usuario = :filiado_usuario', [
            'filiado_usuario' => $email
        ])->find();


        if ($user) {
            if (password_verify($password, $user['filiado_senha'])) {
                    $this->login([
                        'filiado_usuario' => $email,
                    ], ['user_id' => $user['filiado_id'], ['user_tipo_conta' => $user['filiado_tipo_conta']]]);

                return true;
                }
        }

        return false;
    }

    public function login($user, $userId = null)
    {
        Session::put('user', ['email' => $user['email'] ?? $user['filiado_usuario'] ?? '']);
        Session::put('user_id', $userId['user_id'] ?? $this->findEmail($user['email']));
        Session::put('user_tipo_conta', $userId[0]['user_tipo_conta'] ?? $this->findEmailAccountPermission($user['email']));

        session_regenerate_id(true);
    }

    public function findEmail($email)
    {
        $user = App::resolve(Database::class)
            ->query('select * from Filiados where filiado_usuario = :filiado_usuario', [
                'filiado_usuario' => $email
            ])->find();

        return $user['filiado_id'] ?? null;
    }

    public function findEmailAccountPermission($email)
    {
        $user = App::resolve(Database::class)
            ->query('select * from Filiados where filiado_usuario = :filiado_usuario', [
                'filiado_usuario' => $email
            ])->find();

        return $user['filiado_tipo_conta'] ?? null;
    }

    public function logout()
    {
        Session::destroy();
    }
}