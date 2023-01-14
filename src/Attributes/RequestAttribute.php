<?php

namespace bss-php\laraveldto\Attributes;

use Attribute;
use bss-php\laraveldto\Attributes\Interfaces\DataAttributeInterface;
use bss-php\laraveldto\Attributes\Interfaces\RequestAttributeInterface;

#[Attribute]
class RequestAttribute implements DataAttributeInterface, RequestAttributeInterface
{
    public function __construct(
        private ?string $name = null
    ) {
    }

    public function getRequestAttribute(): ?string
    {
        return $this->name;
    }
}
