<?php

namespace Waveforms\Contracts\Distance;

use Waveforms\Contracts\Sensors\Contracts\DetectionIC;

interface MeasuresDistance extends DetectionIC
{
    public function distance(DistanceUnit $unit = DistanceUnit::MM): float;

}
