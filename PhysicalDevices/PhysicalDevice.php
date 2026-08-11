<?php

namespace Waveforms\Contracts\PhysicalDevices;

interface PhysicalDevice
{
    public static function circuit(string $driver): static;
}
