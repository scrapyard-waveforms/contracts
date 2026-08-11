<?php

namespace Waveforms\Contracts\Environment;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;

/**
 * Lightning-detection IC (AS3935, …).
 *
 * Method surface lands with the AS3935 0.7 restore — marker only for now.
 */
interface DetectsLightingStrikes extends DetectionIC
{
}
