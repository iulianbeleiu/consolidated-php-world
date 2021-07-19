<?php

declare(strict_types=1);

namespace App\Tests\Classes;

use App\Classes\TypeHinting;
use PHPUnit\Framework\TestCase;

final class TypeHintingTest extends TestCase
{
    private TypeHinting $typeHinting;

    protected function setUp(): void
    {
        $this->typeHinting = new TypeHinting();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            TypeHinting::class,
            $this->typeHinting
        );
    }

    public function testReturnInt(): void
    {
        $this->assertIsInt(
            $this->typeHinting->getMyInt(10)
        );
    }

    public function testReturnBool(): void
    {
        $this->assertIsBool(
            $this->typeHinting->getMyBool(false)
        );
    }

    public function testReturnsString(): void
    {
        $this->assertIsString(
            $this->typeHinting->getMyString("test")
        );
    }

    public function testErrorCanBeExpected(): void
    {
        $this->expectError();

        $this->typeHinting->getMyInt("string");
    }

    public function testReturnedValue(): void
    {
        $this->assertEquals(
            10,
            $this->typeHinting->getMyInt(10)
        );

        $this->assertEquals(
            true,
            $this->typeHinting->getMyBool(true)
        );

        $this->assertEquals(
            "test",
            $this->typeHinting->getMyString("test")
        );
    }
}
