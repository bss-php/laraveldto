<?php

namespace bss-php\laraveldto\Tests\Nested;

use bss-php\laraveldto\Tests\TestCase;

class NestedPropertiesTest extends TestCase
{
    public function testNestedPropertyMissing()
    {
        $data = new NestedParentData();

        self::assertInstanceOf(NestedParentData::class, $data);
    }
}
