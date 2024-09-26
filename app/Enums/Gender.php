<?php

namespace App\Enums;

enum Gender: string
{

    case   Male = 'male';
    case Female = "FEMALE";

    public  function toString(): string
    {

        return match ($this) {
            self::Male => 'MALE',
            self::Female => 'FEMALE',

        };

    }

}
