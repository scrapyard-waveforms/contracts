<?php

namespace Waveforms\Contracts\Environment;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;
use Waveforms\Contracts\Sensors\Enums\HumidityUnit;

/**
 * Relative-humidity-capable detection IC (AHT, …).
 */
interface MeasuresRelativeHumidity extends DetectionIC
{
    public function humidity(HumidityUnit $unit = HumidityUnit::PERCENT): float;
}
