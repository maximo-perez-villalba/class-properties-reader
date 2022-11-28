<?php

use MPV\Tools\Reflection\ClassPropertiesReader;
use PHPUnit\Framework\TestCase;
use Test\MPV\Tools\Reflection\Model\Leaf;

class ClassPropertiesReaderTest extends TestCase
{

    public function testGetAll()
    {
        $allProperties = ClassPropertiesReader::getAll(Leaf::class);
        
        $this->assertIsArray($allProperties);
        $this->assertEquals(8,sizeof($allProperties));
        $this->assertArrayHasKey('propertyStringNullable', $allProperties);
    }
}

