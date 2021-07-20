<?php

namespace App\Classes\Generators;

use Generator;
use App\Contracts\GeneratorInterface;

class SendingValueGenerator implements GeneratorInterface
{

    /**
     * @inheritDoc
     */
    public function getRange(int $max): Generator
    {
        for ($i = 1; $i < $max; $i++) {
            $injected = yield $i;

            if ($injected === 'stop') {
                return;
            }
        }
    }
}
