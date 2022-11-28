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

### Como usar
```php
$allProperties = ClassPropertiesReader::getAll(YourCustomClassLeaf::class);
print_r($allProperties);
```

**Salida**   
```bash
Array
(
    [propertyObjectOrNull] => ReflectionProperty Object
        (
            [name] => propertyObjectOrNull
            [class] => YourCustomClassLeaf
        )

    [propertyArray] => ReflectionProperty Object
        (
            [name] => propertyArray
            [class] => YourCustomClassNode
        )

    [propertyBool] => ReflectionProperty Object
        (
            [name] => propertyBool
            [class] => YourCustomClassNode
        )

    [propertyFloat] => ReflectionProperty Object
        (
            [name] => propertyFloat
            [class] => YourCustomClassRoot
        )

    [propertyInt] => ReflectionProperty Object
        (
            [name] => propertyInt
            [class] => YourCustomClassRoot
        )

    [propertyString] => ReflectionProperty Object
        (
            [name] => propertyString
            [class] => YourCustomClassRoot
        )
)
```

