<?php

namespace bss-php\laraveldto\Attributes\Casts;

interface CastInterface
{
    public function castToType(mixed $value): mixed;
}
