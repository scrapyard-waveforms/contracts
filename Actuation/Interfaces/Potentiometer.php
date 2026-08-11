<?php

namespace Waveforms\Contracts\Actuation\Interfaces;

use GeneralPurposeIO\Contracts\Circuits\IntegratedCircuit;

/**
 * Position-sensing potentiometer integrated circuit.
 *
 * Drivers expose the unprocessed analog reading and its normalized position.
 */
interface Potentiometer extends IntegratedCircuit
{
    public function raw(): int;

    public function position(): float;
}
