<?php

declare(strict_types=1);

namespace App\Database;

use App\Contracts\AdapterInterface;

class Database
{
    public function __construct(protected AdapterInterface $adapter)
    {
    }
}
