<?php

use PHPUnit\Framework\TestCase;
use Structural\Adapter\XMLConverter\JSONConverter;
use Structural\Adapter\XMLConverter\XMLConverter;
use Structural\Adapter\XMLConverter\XmlConverterAdapter;

class XMLConverterTest extends TestCase
{
    public function testXmlToJsonConversion() {
        // Arrange
        $jsonConverter = new JSONConverter();
        $xmlConverter = new XmlConverterAdapter($jsonConverter);
        $data = array('name' => 'John', 'age' => 30);
        $expectedJson = json_encode($data);

        // Act
        $actualJson = $xmlConverter->toXml($data);

        // Assert
        $this->assertEquals($expectedJson, $actualJson);

    }
}






