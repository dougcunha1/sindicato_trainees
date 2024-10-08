<?php

namespace Core;

class ValidationException extends \Exception
{
    public array $errors;
    public array $old;

    public static function throw($errors, $old)
    {
       $instance = new static('O formulário falhou na verificação.');

       $instance->errors = $errors;
       $instance->old = $old;

       throw $instance;
    }
}