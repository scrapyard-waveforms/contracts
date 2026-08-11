<?php

namespace Waveforms\Contracts\Actuation\Interfaces;

use GeneralPurposeIO\Contracts\Circuits\IntegratedCircuit;

/**
 * An addressable collection of light-emitting diodes.
 */
interface LEDShape extends IntegratedCircuit
{
    public function pixelCount(): int;

    public function setPixelColor(
        int $pixel,
        int $color_or_red,
        ?int $green = null,
        ?int $blue = null,
        ?int $white = null,
    ): static;

    public function getPixelColor(int $pixel): int;

    public function fill(
        int $color_or_red,
        ?int $green = null,
        ?int $blue = null,
        ?int $white = null,
    ): static;

    public function clear(): static;

    /**
     * Set the global brightness from 0.0 through 1.0.
     */
    public function setBrightness(float $brightness): static;

    public function show(): static;
}
