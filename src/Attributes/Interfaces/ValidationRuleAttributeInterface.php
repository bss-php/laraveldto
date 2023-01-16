<?php

namespace bssphp\laraveldto\Attributes\Interfaces;

interface ValidationRuleAttributeInterface
{
    /**
     * @return mixed[]
     */
    public function getRules(): array;
}
