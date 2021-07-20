<?php

namespace App\Classes\Generators;

use Generator;
use App\Contracts\GeneratorInterface;

class KeyValueGenerator implements GeneratorInterface
{

    /**
     * @inheritDoc
     */
    public function getRange(int $max): Generator
    {
        for ($i = 1; $i < $max; $i++) {
            $value = $i * mt_rand();

            yield $i => $value;
        }
    }
}
