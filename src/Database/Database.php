<?php

declare(strict_types=1);

namespace App\Database;

use App\Contracts\AdapterInterface;

class Database
{
    protected AdapterInterface $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
}
