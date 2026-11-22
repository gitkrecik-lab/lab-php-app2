<?php

declare(strict_types=1);

namespace App;

final class Greeter
{
    public function greet(string $name): string
    {
        return sprintf('Cześć, %s!', $name);
    }

    public function greetEn(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}
