<?php

namespace Structural\Adapter\XMLConverter;

class XmlConverterAdapter implements XMLConverterInterface
{
    public function __construct(protected JSONConverterInterface $JSONConverter)
    {
    }

    public function toXml($data)
    {
        return $this->JSONConverter->toJson($data);
    }
}