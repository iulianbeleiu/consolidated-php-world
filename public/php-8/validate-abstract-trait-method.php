<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Classes\Vehicle;

$vehicle = new Vehicle();

echo $vehicle->getAverageSpeed(100, 6);
