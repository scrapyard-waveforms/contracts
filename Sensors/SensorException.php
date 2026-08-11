<?php

namespace Waveforms\Contracts\Sensors;

use Fabricate\Contracts\Core\ScrapyardIOException;

class SensorException extends ScrapyardIOException
{
    public static function disabled(string $class): static
    {
        return new static("{$class} is disabled — call enable() before reading data.");
    }

    public static function invalidProperty(string $name, string $class): static
    {
        return new static("Invalid property [{$name}] on {$class}.");
    }
}