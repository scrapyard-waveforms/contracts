<?php

namespace Waveforms\Contracts\Actuation\Interfaces;

use GeneralPurposeIO\Contracts\Circuits\IntegratedCircuit;

/**
 * A single light-emitting diode.
 */
interface LED extends IntegratedCircuit
{
    public function on(): void;

    public function off(): void;

    public function toggle(): void;

    public function isOn(): bool;

    /**
     * Get or set brightness as a percentage from 0 through 100.
     */
    public function brightness(?int $percent = null): int;
}
