<?php
namespace Test\MPV\Tools\Reflection\Model;

use DateTime;

/**
 * @author Máximo Perez Villalba
 */
class Node extends Root
{
    private ?DateTime $propertyDateTimeNullable = null;
    private ?object $propertyObjectNullable = null;
    private ?Leaf $propertyNodeNullable = null;

    public function __construct()
    {
        $this->propertyDateTimeNullable = new DateTime();
    }

    public function getPropertyDateTimeNullable(): DateTime
    {
        return $this->propertyDateTimeNullable;
    }

    public function getPropertyObjectNullable(): ?object
    {
        return $this->propertyObjectNullable;
    }

    public function getPropertyLeafNullable(): ?Leaf
    {
        return $this->propertyNodeNullable;
    }

    public function setPropertyDateTimeNullable(DateTime $propertyDateTimeNullable): void
    {
        $this->propertyDateTimeNullable = $propertyDateTimeNullable;
    }

    public function setPropertyObjectNullable(?object $propertyObjectNullable): void
    {
        $this->propertyObjectNullable = $propertyObjectNullable;
    }

    public function setPropertyLeafNullable(?Leaf $propertyNodeNullable): void
    {
        $this->propertyNodeNullable = $propertyNodeNullable;
    }
}
