<?php

namespace App\Classes\Generators;

use Generator;
use App\Contracts\GeneratorInterface;

class IntGenerator implements GeneratorInterface
{

    /**
     * @inheritDoc
     */
    public function getRange(int $max = 10): Generator
    {
        for ($i = 1; $i < $max; $i++) {
            yield $i;
        }
    }
}
