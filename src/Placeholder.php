<?php

declare(strict_types=1);

namespace Jeromegamez\MyLibrary;

final readonly class Placeholder
{
    public function __construct(private string $prefix) {}

    public function echo(string $value): string
    {
        return $this->prefix . $value;
    }
}
