<?php

namespace App\Enum;

enum TagStatus: string
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