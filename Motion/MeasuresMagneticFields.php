<?php

namespace Waveforms\Contracts\Motion;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;

/**
 * Magnetic-field-capable detection IC (LIS3MDL, TLV493D, …).
 *
 * Fresh axis samples in microtesla (µT) — same x/y/z shape as
 * {@see MeasuresAcceleration}.
 */
interface MeasuresMagneticFields extends DetectionIC
{
    public function x(): float;

    public function y(): float;

    public function z(): float;
}
