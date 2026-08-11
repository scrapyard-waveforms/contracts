<?php

namespace Waveforms\Contracts\Environment;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;
use Waveforms\Contracts\Sensors\Enums\PressureUnit;

/**
 * Barometric-pressure-capable detection IC (BMP, …).
 */
interface MeasuresBarometricPressure extends DetectionIC
{
    public function pressure(PressureUnit $unit = PressureUnit::HECTOPASCAL): float;
}
