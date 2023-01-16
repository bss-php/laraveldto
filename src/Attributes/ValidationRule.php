<?php

namespace bssphp\laraveldto\Attributes;

use Attribute;
use bssphp\laraveldto\Attributes\Interfaces\DataAttributeInterface;
use bssphp\laraveldto\Attributes\Interfaces\ValidationRuleAttributeInterface;

#[Attribute]
class ValidationRule implements DataAttributeInterface, ValidationRuleAttributeInterface
{
    /**
     * @param mixed[] $rules
     */
    public function __construct(
        private array $rules
    ) {
    }

    /**
     * @return mixed[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }
}
