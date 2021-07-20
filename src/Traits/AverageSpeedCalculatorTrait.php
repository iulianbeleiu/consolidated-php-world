<?php

namespace App\Traits;

trait AverageSpeedCalculatorTrait
{
    /**
     * @param int $distance
     * @param int $seconds
     * @return float
     */
    abstract public function getAverageSpeed(int $distance, int $seconds): float;
}
