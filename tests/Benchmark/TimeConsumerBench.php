<?php

declare(strict_types=1);

namespace Alphaolomi\Library\Tests\Benchmark;

use Alphaolomi\Library\TimeConsumer;

class TimeConsumerBench
{
    /**
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchConsume()
    {
        $consumer = new TimeConsumer();
        $consumer->consume();
    }
}
