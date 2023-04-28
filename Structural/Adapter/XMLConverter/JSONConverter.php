<?php

namespace Structural\Adapter\XMLConverter;

class JSONConverter implements JSONConverterInterface
{
    public function toJson($data): bool|string
    {
        return json_encode($data);
    }
}