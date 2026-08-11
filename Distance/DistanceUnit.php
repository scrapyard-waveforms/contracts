<?php

namespace Waveforms\Contracts\Distance;

enum DistanceUnit: string
{
    case UM = 'um';
    case NM = 'nm';
    case MM = 'mm';
    case CM = 'cm';
    case M = 'm';
    case IN = 'in';
    case FT = 'ft';
    case YD = 'yd';

    public function convertFromMm(float $mm): float
    {
        return match ($this) {
            self::CM => $mm / 10.0,
            self::M => $mm / 1000.0,
            self::IN => $mm / 25.4,
            self::FT => $mm / 304.8,
            self::YD => $mm / 914.4,
            self::UM => $mm * 1_000.0,
            self::NM => $mm * 1_000_000.0,
            self::MM => $mm,
        };
    }
}
