<?php

namespace App\Enum;

enum BoxStatus: string
{
    case Available = 'available';
    case Frozen = 'frozen';
    case Unavailable = 'unavailable';

    public function getLabel(): string
    {
        return match ($this) {
            self::Available => 'Disponible',
            self::Frozen => 'Congelé',
            self::Unavailable => 'Indisponible',
        };
    }
}