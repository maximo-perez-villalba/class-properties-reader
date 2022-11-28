<?php
namespace Test\MPV\Tools\Reflection\Model;

/**
 * @author Máximo Perez Villalba
 */
class Leaf extends Node
{
    private ?array $propertyArrayNullable = null;
    
    public function __construct()
    {
        $this->propertyArrayNullable = [];
    }

    public function getPropertyArrayNullable(): ?array
    {
        return $this->propertyArrayNullable;
    }

    public function setPropertyArrayNullable(?array $propertyArrayNullable): void
    {
        $this->propertyArrayNullable = $propertyArrayNullable;
    }
}

