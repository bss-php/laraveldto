<?php

namespace bss-php\laraveldto\Attributes\Interfaces;

interface ValidationRuleAttributeInterface
{
    /**
     * @return mixed[]
     */
    public function getRules(): array;
}
