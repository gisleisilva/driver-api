<?php

namespace App\Enums;

enum SexDriverUser: string
{
    case M = 'Masculino';
    case F = 'Feminino';
    case O = 'Outro';

    public static function fromValue(string $value): string
    {
        foreach(self::cases() as $case){
            if($value === $case->value){
                return $case->value;
            }
        }

        throw new \ValueError("{$value} is not valid");
    }
}
