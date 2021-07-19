<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Classes\TypeHinting;

$testTypeHinting = new TypeHinting();

var_dump(
    $testTypeHinting->getMyInt(10),
    $testTypeHinting->getMyBool(true),
    $testTypeHinting->getMyString("test string")
);
