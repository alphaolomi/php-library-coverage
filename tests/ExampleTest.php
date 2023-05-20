<?php

declare(strict_types=1);

namespace Alphaolomi\Library\Tests;

use Alphaolomi\Library\Example;
use PHPUnit\Framework\TestCase;


class ExampleTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testEchoPhrase()
    {
        $actual_phrase = 'Hello_League';

        $example = new Example();
        $expected =  $example->echoPhrase($actual_phrase);

        $this->assertEquals(
            $expected,
            $actual_phrase,
            "actual value is not equals to expected"
        );
    }
}
