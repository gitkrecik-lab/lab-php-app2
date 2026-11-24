<?php

declare(strict_types=1);

namespace App\Tests;

use App\Greeter;
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreet(): void
    {
        self::assertSame('Cześć, Ola!', (new Greeter())->greet('Ola'));
    }

    public function testGreetEn(): void
    {
        self::assertSame('Hello, Ola!', (new Greeter())->greetEn('Ola'));
    }
}
