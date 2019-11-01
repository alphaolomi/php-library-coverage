<?php

declare(strict_types=1);

namespace App\Cover;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    /** @test   */
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }


    /** @test   */
    public function testEchoPhrase()
    {
        $actual_phrase = 'Hello_League';
        $app = new Example();
        $expected =  $app->echoPhrase($actual_phrase);

        $this->assertEquals(
            $expected,
            $actual_phrase,
            "actual value is not equals to expected"
        );
    }
}
