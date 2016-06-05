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
 * @link      http://ganbarodigital.github.io/php-mv-unit-test-helpers
 */

namespace GanbaroDigitalTest\UnitTestHelpers\V1\ClassesAndObjects;

use GanbaroDigital\UnitTestHelpers\V1\ClassesAndObjects\GetProperty;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass GanbaroDigital\UnitTestHelpers\V1\ClassesAndObjects\GetProperty
 */
class GetPropertyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::fromClass
     */
    public function testCanGetStaticPrivateProperty()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedValue = 42;

        // ----------------------------------------------------------------
        // perform the change

        $actualValue = GetProperty::fromClass(GetPropertyTest_StaticTarget::class, 'privateProp');

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedValue, $actualValue);
    }

    /**
     * @covers ::fromClass
     */
    public function testCanGetStaticProtectedProperty()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedValue = 999;

        // ----------------------------------------------------------------
        // perform the change

        $actualValue = GetProperty::fromClass(GetPropertyTest_StaticTarget::class, 'protectedProp');

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedValue, $actualValue);
    }

    /**
     * @covers ::fromClass
     */
    public function testCanGetStaticPublicProperty()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedValue = 29;

        // ----------------------------------------------------------------
        // perform the change

        $actualValue = GetProperty::fromClass(GetPropertyTest_StaticTarget::class, 'publicProp');

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedValue, $actualValue);
    }

    /**
     * @covers ::fromObject
     */
    public function testCanGetPrivatePropertyFromObject()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedValue = 800;
        $target = new GetPropertyTest_ObjectTarget;

        // ----------------------------------------------------------------
        // perform the change

        $actualValue = GetProperty::fromObject($target, 'privateProp');

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedValue, $actualValue);
    }

    /**
     * @covers ::fromObject
     */
    public function testCanGetProtectedPropertyFromObject()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedValue = 321;
        $target = new GetPropertyTest_ObjectTarget;

        // ----------------------------------------------------------------
        // perform the change

        $actualValue = GetProperty::fromObject($target, 'protectedProp');

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedValue, $actualValue);
    }

    /**
     * @covers ::fromObject
     */
    public function testCanGetPublicPropertyFromObject()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedValue = 182;
        $target = new GetPropertyTest_ObjectTarget;

        // ----------------------------------------------------------------
        // perform the change

        $actualValue = GetProperty::fromObject($target, 'publicProp');

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedValue, $actualValue);
    }}

class GetPropertyTest_StaticTarget
{
    private static $privateProp = 42;
    protected static $protectedProp = 999;
    public static $publicProp = 29;
}

class GetPropertyTest_ObjectTarget
{
    private $privateProp = 800;
    protected $protectedProp = 321;
    public $publicProp = 182;
}
