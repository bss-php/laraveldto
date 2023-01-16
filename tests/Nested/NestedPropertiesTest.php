<?php

namespace bssphp\laraveldto\Tests\Nested;

use bssphp\laraveldto\Tests\TestCase;

class NestedPropertiesTest extends TestCase
{
    public function testNestedPropertyMissing()
    {
        $data = new NestedParentData();

        self::assertInstanceOf(NestedParentData::class, $data);
    }
}
