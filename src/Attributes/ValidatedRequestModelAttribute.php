<?php

namespace bssphp\laraveldto\Attributes;

use Attribute;
use bssphp\laraveldto\Attributes\Interfaces\DataAttributeInterface;
use bssphp\laraveldto\Attributes\Interfaces\ModelAttributeInterface;
use bssphp\laraveldto\Attributes\Interfaces\RequestAttributeInterface;
use bssphp\laraveldto\Attributes\Interfaces\ValidationRuleAttributeInterface;

#[Attribute]
class ValidatedRequestModelAttribute implements DataAttributeInterface, ValidationRuleAttributeInterface, RequestAttributeInterface, ModelAttributeInterface
{
    /**
     * @param mixed[] $rules
     * @param string|null $requestAttribute
     * @param string|null $modelAttribute
     */
    public function __construct(
        private array $rules = [],
        private ?string $requestAttribute = null,
        private ?string $modelAttribute = null
    ) {
    }

    /**
     * @return mixed[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    public function getRequestAttribute(): ?string
    {
        return $this->requestAttribute;
    }

    public function getModelAttribute(): ?string
    {
        return $this->modelAttribute;
    }
}
