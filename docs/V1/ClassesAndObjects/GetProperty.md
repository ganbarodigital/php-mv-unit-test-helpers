---
currentSection: v1
currentItem: classesandobjects
pageflow_prev_url: index.html
pageflow_prev_text: Classes And Objects
pageflow_next_url: InvokeMethod.html
pageflow_next_class: InvokeMethod class
---

# GetProperty

<div class="callout info">
Since v1.2016060501
</div>

## Description

Use `GetProperty` to get the value of a protected or private property. You can use `GetProperty` on:

* static properties defined in a class, and
* properties that are unique to each object

## Public Interface

`GetProperty` has the following public interface:

```php
// GetProperty lives in this namespace
namespace GanbaroDigital\UnitTestHelpers\V1\ClassesAndObjects;

class GetProperty
{
    /**
     * Get protected/private property of a class
     *
     * Use ONLY for testing purposes
     *
     * @param string $className
     *        class that holds the static property
     * @param string $propertyName
     *        static property that we want
     *
     * @return mixed
     *         the static property's value
     */
    public static function fromClass($className, $propertyName);

    /**
     * Get protected/private property of an object
     *
     * Use ONLY for testing purposes
     *
     * @param object $object
     *        object that holds the property
     * @param string $propertyName
     *        property that we want
     *
     * @return mixed
     *         the object property's value
     */
    public static function fromObject($object, $propertyName);
}
```

## Notes

None at this time.
