<?php

namespace Waveforms\Contracts\Environment;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;
use Waveforms\Contracts\Sensors\Enums\TemperatureUnit;

/**
 * Temperature-capable detection IC (AHT, BMP, …).
 *
 * Drivers report a fresh sample converted into the requested unit —
 * same shape as {@see \Waveforms\Contracts\Distance\MeasuresDistance::distance()}.
 */
interface MeasuresTemperature extends DetectionIC
{
    public function temperature(TemperatureUnit $unit = TemperatureUnit::CELSIUS): float;
}
