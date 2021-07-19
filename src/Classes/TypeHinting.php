<?php

declare(strict_types=1);

namespace App\Classes;

use App\Contracts\TypeHintingInterface;

class TypeHinting implements TypeHintingInterface
{
    public function getMyInt(int $var): int
    {
        return $var;
    }

    public function getMyBool(bool $var): bool
    {
        return $var;
    }

    public function getMyString(string $var): string
    {
        return $var;
    }
}
