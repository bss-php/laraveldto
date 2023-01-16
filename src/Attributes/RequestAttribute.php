<?php

namespace bssphp\laraveldto\Attributes;

use Attribute;
use bssphp\laraveldto\Attributes\Interfaces\DataAttributeInterface;
use bssphp\laraveldto\Attributes\Interfaces\RequestAttributeInterface;

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
