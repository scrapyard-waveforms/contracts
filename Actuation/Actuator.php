<?php

namespace Waveforms\Contracts\Actuation;

interface Actuator
{
    public static function circuit(string $driver): static;
}
