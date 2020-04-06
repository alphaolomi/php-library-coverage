<?php

declare(strict_types=1);

namespace App\Cover;
/**
 * Example class
 */
class Example
{
    /**
     * Create a new Instance
     */f
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
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
