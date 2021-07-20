<?php

namespace App\Classes;

use App\Traits\AverageSpeedCalculatorTrait;

class Vehicle
{
    use AverageSpeedCalculatorTrait;

    /**
     * @inheritDoc
     * Will throw:
     * Fatal error: Declaration of
     * App\Classes\Vehicle::getAverageSpeed(string $distance, int $seconds): float
     * must be compatible with
     * App\Traits\AverageSpeedCalculatorTrait::getAverageSpeed(int $distance, int $seconds): float
     */
    public function getAverageSpeed(string $distance, int $seconds): float
    {
        return $distance / $seconds;
    }
}
