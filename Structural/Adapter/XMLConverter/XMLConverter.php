<?php

namespace Structural\Adapter\XMLConverter;

// Adapter class that adapts JSONConverter to work with XML
class XMLConverter implements XMLConverterInterface
{
    public function toXml($data): string
    {
       return $data.' has converted to xml';
    }
}