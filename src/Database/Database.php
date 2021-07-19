<?php

declare(strict_types=1);

namespace App\Database;

class Database
{
    protected MysqlAdapter $adapter;

    public function __construct(MysqlAdapter $adapter)
    {
        $this->adapter = $adapter;
    }
}
