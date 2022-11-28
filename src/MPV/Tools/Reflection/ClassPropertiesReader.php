<?php
namespace MPV\Tools\Reflection;

use ReflectionClass;

/**
 * @author Máximo Perez Villalba
 */
abstract class ClassPropertiesReader
{
    /**
     * @param string $classname
     * @return ReflectionProperty[]
     */
    public static function getAll(string $classname): array
    {
        $reflectedClass = new ReflectionClass($classname);
        $allProperties = [];
        
        do {
            foreach ($reflectedClass->getProperties() as $rProperty) 
            {
                $key = $rProperty->getName();

                if(!isset($allProperties[$key]))
                {
                    $allProperties[$key] = $rProperty;
                }
            }
        } 
        while ($reflectedClass = $reflectedClass->getParentClass());
        
        return $allProperties;
    }
    
}
