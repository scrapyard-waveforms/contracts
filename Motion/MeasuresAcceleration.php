<?php

namespace Waveforms\Contracts\Motion;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;

/**
 * Acceleration-capable detection IC (ADXL, LIS3DH, MSA311, …).
 *
 * Fresh axis samples in g (or the driver's native acceleration unit).
 */
interface MeasuresAcceleration extends DetectionIC
{
    public function x(): float;

    public function y(): float;

    public function z(): float;
}
