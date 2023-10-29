<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    public array $attributes;
    protected $errors = [];

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Por favor, forneça um email válido.';
        }

        if (!Validator::string($attributes['password'])) {
            $this->errors['password'] = 'Por favor, forneça uma senha válida.';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }
}