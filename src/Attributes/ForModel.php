<?php

namespace bssphp\laraveldto\Attributes;

use Attribute;

#[Attribute]
class ForModel
{
    public function __construct(
        public string $model
    ) {
    }
}
