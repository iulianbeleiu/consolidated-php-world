<?php

namespace App\Contracts;

use Generator;

interface GeneratorInterface
{
    /**
     * @param int $max
     * @return Generator
     */
    public function getRange(int $max): Generator;
}
