<?php

namespace Waveforms\Contracts\Actuation\Interfaces;

interface LEDStrip extends LEDShape
{
    public function length(): int;
}
