---
currentSection: v1
currentItem: classesandobjects
pageflow_prev_url: InvokeMethod.html
pageflow_prev_class: InvokeMethod class
---

# SetProperty

<div class="callout info">
Since v1.2016060502
</div>

## Description

Use `SetProperty` to change the value of a protected or private property. You can use `SetProperty` on:

* static properties defined in a class, and
* properties that are unique to each object

## Public Interface

`SetProperty` has the following public interface:

```php
// SetProperty lives in this namespace
namespace GanbaroDigital\UnitTestHelpers\V1\ClassesAndObjects;

class SetProperty
{
    /**
     * Set the protected/private property of a class
     *
     * Use ONLY for testing purposes
     *
     * @param string $className
     *        class that holds the static property
     * @param string $propertyName
     *        static property that we want to change
     * @param mixed $newValue
     *        the new value for the static property
     *
     * @return void
     */
    public static function inClass($className, $propertyName, $newValue);

    /**
     * Set the protected/private property of an object
     *
     * Use ONLY for testing purposes
     *
     * @param object $object
     *        object that holds the property
     * @param string $propertyName
     *        property that we want to change
     * @param mixed $newValue
     *        the new value for the property
     *
     * @return void
     */
    public static function inObject($object, $propertyName, $newValue);
}
```

## Notes

None at this time.
