<?php

declare(strict_types=1);

namespace Alphaolomi\Library;

/**
 * An example class
 * @author Alphaolomi
 *
 * example:
 *
 *     $example = new Example();
 *     $example->echoPhrase('Hello, World!');
 *
 * @package Alphaolomi\Library
 */
class Example
{
    /**
     * Constructor
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Echoes a phrase
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
