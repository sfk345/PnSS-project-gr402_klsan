<?php

namespace Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Validator\AbstractValidator;

class FormatAvatarValidator extends AbstractValidator
{

    protected string $message = 'Unacceptable image format';

    public function rule(): bool
    {
        return in_array($this->value['type'], ['img/jpg', 'img/png']);
    }
}