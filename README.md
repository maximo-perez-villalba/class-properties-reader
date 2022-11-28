# class-properties-reader
La clase lee vía reflexión todos las propiedades de una clase incluyendo las propiedades privadas de su jerarquía. 
Implementa una extensión del método [ReflectionClass::getProperties](https://www.php.net/manual/es/reflectionclass.getproperties.php)
de la clase [ReflectionClass](https://www.php.net/manual/en/class.reflectionclass.php). 

## Ejemplo de uso
```php
class YourCustomClassRoot
{
    private string $propertyString = 'aValueOfTypeString';
    private int $propertyInt = 0;
    private float $propertyFloat = 0.0;
}

class YourCustomClassNode extends YourCustomClassRoot
{
    private bool $propertyBool = false;
    private array $propertyArray = [];
}

class YourCustomClassLeaf extends YourCustomClassNode
{
    private object ?$propertyObjectOrNull = null;
}
```

## Como se usa
```php
$allProperties = ClassPropertiesReader::getAll(YourCustomClassLeaf::class);
print_r($allProperties);
```

**Salida**   
```bash
(
    [propertyArrayNullable] => ReflectionProperty Object
        (
            [name] => propertyArrayNullable
            [class] => Test\MPV\Tools\Reflection\Model\Leaf
        )

    [propertyDateTimeNullable] => ReflectionProperty Object
        (
            [name] => propertyDateTimeNullable
            [class] => Test\MPV\Tools\Reflection\Model\Node
        )

    [propertyObjectNullable] => ReflectionProperty Object
        (
            [name] => propertyObjectNullable
            [class] => Test\MPV\Tools\Reflection\Model\Node
        )

    [propertyNodeNullable] => ReflectionProperty Object
        (
            [name] => propertyNodeNullable
            [class] => Test\MPV\Tools\Reflection\Model\Node
        )

    [propertyStringNullable] => ReflectionProperty Object
        (
            [name] => propertyStringNullable
            [class] => Test\MPV\Tools\Reflection\Model\Root
        )

    [propertyInt] => ReflectionProperty Object
        (
            [name] => propertyInt
            [class] => Test\MPV\Tools\Reflection\Model\Root
        )

    [propertyFloat] => ReflectionProperty Object
        (
            [name] => propertyFloat
            [class] => Test\MPV\Tools\Reflection\Model\Root
        )

    [propertyBool] => ReflectionProperty Object
        (
            [name] => propertyBool
            [class] => Test\MPV\Tools\Reflection\Model\Root
        )

)
```

