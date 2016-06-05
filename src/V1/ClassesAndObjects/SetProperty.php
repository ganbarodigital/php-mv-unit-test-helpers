<?php

/**
 * Copyright (c) 2015-present Ganbaro Digital Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Libraries
 * @package   UnitTestHelpers/ClassesAndObjects
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-mv-unit-test-helpers
 */

namespace GanbaroDigital\UnitTestHelpers\V1\ClassesAndObjects;

use ReflectionClass;
use ReflectionObject;

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
    public static function inClass($className, $propertyName, $newValue)
    {
        // make the method callable
        $refObj = new ReflectionClass($className);
        $refProp = $refObj->getProperty($propertyName);

        $refProp->setAccessible(true);
        $refProp->setValue($newValue);
    }

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
    public static function inObject($object, $propertyName, $newValue)
    {
        // make the method callable
        $refObj = new ReflectionObject($object);
        $refProp = $refObj->getProperty($propertyName);

        $refProp->setAccessible(true);
        $refProp->setValue($object, $newValue);
    }
}
