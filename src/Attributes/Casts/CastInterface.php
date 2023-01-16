<?php

namespace bssphp\laraveldto\Attributes\Casts;

interface CastInterface
{
    public function castToType(mixed $value): mixed;
}
