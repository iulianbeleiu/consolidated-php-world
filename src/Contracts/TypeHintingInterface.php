<?php

namespace App\Contracts;

interface TypeHintingInterface
{
    /**
     * @param int $var
     * @return int
     */
    public function getMyInt(int $var): int;

    /**
     * @param bool $var
     * @return bool
     */
    public function getMyBool(bool $var): bool;

    /**
     * @param string $var
     * @return string
     */
    public function getMyString(string $var): string;
}
