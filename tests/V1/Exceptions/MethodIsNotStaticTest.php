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
 * @package   UnitTestHelpers/Exceptions
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://ganbarodigital.github.io/php-mv-unit-test-helpers
 */

namespace GanbaroDigitalTest\UnitTestHelpers\V1\Exceptions;

use GanbaroDigital\UnitTestHelpers\V1\Exceptions\MethodIsNotStatic;
use GanbaroDigital\UnitTestHelpers\V1\Exceptions\UnitTestHelpersException;
use PHPUnit_Framework_TestCase;
use RuntimeException;

/**
 * @coversDefaultClass GanbaroDigital\UnitTestHelpers\V1\Exceptions\MethodIsNotStatic
 */
class MethodIsNotStaticTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::newFromClassAndMethod
     */
    public function testCanInstantiate()
    {
        // ----------------------------------------------------------------
        // setup your test

        $className  = 'alice';
        $methodName = 'bob';

        // ----------------------------------------------------------------
        // perform the change

        $unit = MethodIsNotStatic::newFromClassAndMethod($className, $methodName);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(MethodIsNotStatic::class, $unit);
    }

    /**
     * @coversNothing
     */
    public function testIsAUnitTestHelpersException()
    {
        // ----------------------------------------------------------------
        // setup your test

        $className  = 'alice';
        $methodName = 'bob';

        // ----------------------------------------------------------------
        // perform the change

        $unit = new MethodIsNotStatic($className, $methodName);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(UnitTestHelpersException::class, $unit);
    }

    /**
     * @coversNothing
     */
    public function testIsARuntimeException()
    {
        // ----------------------------------------------------------------
        // setup your test

        $className  = 'alice';
        $methodName = 'bob';

        // ----------------------------------------------------------------
        // perform the change

        $unit = new MethodIsNotStatic($className, $methodName);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(RuntimeException::class, $unit);
    }

}
