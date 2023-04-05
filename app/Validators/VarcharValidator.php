<?php

namespace Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Validator\AbstractValidator;

class VarcharValidator extends AbstractValidator
{

    protected string $message = 'The password :field must contain only Latin characters';

    public function rule(): bool
    {
        return preg_match('/^[a-z]++$/ui', $this->value);
    }
}