<?php

namespace Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Validator\AbstractValidator;

class PasswordValidator extends AbstractValidator
{

    protected string $message = 'The password :field must contain at least 5 characters';

    public function rule(): bool
    {
        return strlen((String)$this->value) >= 8;
    }
}