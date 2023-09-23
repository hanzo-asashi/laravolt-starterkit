<?php

declare(strict_types=1);

namespace App\Enums;

use EmreYarligan\EnumConcern\EnumConcern;

enum StatusAktifEnum: int
{
    use EnumConcern;

    case AKTIF = 1;
    case NON_AKTIF = 0;

    public function names(): string
    {
        return match ($this) {
            self::AKTIF => 'Aktif',
            self::NON_AKTIF => 'Non Aktif',
        };
    }
}
