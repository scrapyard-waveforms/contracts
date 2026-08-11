<?php

namespace Waveforms\Contracts\Distance;

use Waveforms\Contracts\Sensors\Measurements\SensorEvent;

abstract class DistanceEvent extends SensorEvent
{
    public function __construct(
        protected readonly int|float $distance,
        protected readonly DistanceUnit $unit,
        int|float $timestamp
    ) {
        parent::__construct($timestamp);
    }
}
