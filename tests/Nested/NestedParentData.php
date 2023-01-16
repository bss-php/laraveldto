<?php

namespace bssphp\laraveldto\Tests\Nested;

use bssphp\laraveldto\AbstractModelData;
use bssphp\laraveldto\Attributes\NestedModelData;

class NestedParentData extends AbstractModelData
{
    #[NestedModelData(NestedParentData::class)]
    public array $children;
}
