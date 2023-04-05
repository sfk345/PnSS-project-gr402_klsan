<?php

namespace Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Validator\AbstractValidator;

class CyrillicValidator extends AbstractValidator
{

    protected string $message = 'Field :field must contain only Cyrillic characters';

    public function rule(): bool
    {
        return preg_match('/^[а-яА-Я]++$/ui', $this->value);
    }
}