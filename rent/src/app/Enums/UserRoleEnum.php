<?php

namespace App\app\Enums;

enum UserRoleEnum : string
{
    case Admin = 'admin';
    case User = 'user';

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'admin',
            self::User => 'user',
        };
    }
}
