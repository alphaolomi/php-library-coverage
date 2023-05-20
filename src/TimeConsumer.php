<?php

declare(strict_types=1);

namespace Alphaolomi\Library;

/**
 * TimeConsumer class
 *
 * @author Alphaolomi
 *
 * @package Alphaolomi\Library
 */
class TimeConsumer
{
    /**
     * Constructor
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Consume time
     */
    public function consume(): void
    {
        usleep(100);
    }
}
