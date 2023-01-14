<?php

namespace bss-php\laraveldto\Attributes;

use Attribute;
use bss-php\laraveldto\Attributes\Interfaces\DataAttributeInterface;
use bss-php\laraveldto\Attributes\Interfaces\ModelAttributeInterface;

#[Attribute]
class ModelAttribute implements DataAttributeInterface, ModelAttributeInterface
{
    public function __construct(
        private ?string $attribute = null
    ) {
    }

    public function getModelAttribute(): ?string
    {
        return $this->attribute;
    }
}
