<?php

namespace App\Kernel\Validator;

interface ValidatorInterface
{
    public function validate($data, $rules): bool;

    public function errors(): array;
}
