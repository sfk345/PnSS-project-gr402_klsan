<?php

namespace Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Validator\AbstractValidator;

class SizeAvatarValidator extends AbstractValidator
{

    protected string $message = 'The image size should be within 2Mb';

    public function rule(): bool
    {
        return $this->value['size'] <= 2048000;
    }
}