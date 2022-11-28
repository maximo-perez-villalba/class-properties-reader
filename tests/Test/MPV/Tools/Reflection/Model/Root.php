<?php
namespace Test\MPV\Tools\Reflection\Model;

use JsonSerializable;
use Stringable;

/**
 * @author Máximo Perez Villalba
 */
class Root implements JsonSerializable, Stringable
{

    private ?string $propertyStringNullable = 'aValue';
    private int $propertyInt = 0;
    private float $propertyFloat = 0.0;
    private bool $propertyBool = false;
    
    public function __construct(){}

    public function __toString(): string
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): mixed
    {
        return json_encode($this);
    }
    
    public function getPropertyStringNullable(): ?string
    {
        return $this->propertyStringNullable;
    }

    public function getPropertyInt(): int
    {
        return $this->propertyInt;
    }

    public function getPropertyFloat(): float
    {
        return $this->propertyFloat;
    }

    public function getPropertyBool(): bool
    {
        return $this->propertyBool;
    }

    public function setPropertyStringNullable(?string $propertyStringNullable): void
    {
        $this->propertyStringNullable = $propertyStringNullable;
    }

    public function setPropertyInt(int $propertyInt): void
    {
        $this->propertyInt = $propertyInt;
    }

    public function setPropertyFloat(float $propertyFloat): void
    {
        $this->propertyFloat = $propertyFloat;
    }

    public function setPropertyBool(bool $propertyBool): void
    {
        $this->propertyBool = $propertyBool;
    }
}
