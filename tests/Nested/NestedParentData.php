<?php

namespace bss-php\laraveldto\Tests\Nested;

use bss-php\laraveldto\AbstractModelData;
use bss-php\laraveldto\Attributes\NestedModelData;

class NestedParentData extends AbstractModelData
{
    #[NestedModelData(NestedParentData::class)]
    public array $children;
}
