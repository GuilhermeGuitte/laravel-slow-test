<?php

namespace GuilhermeGuitte\LaravelSlowTest;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\BaseTestListener;
use PHPUnit\Framework\ExpectationFailedException;

class RunTimeListener extends BaseTestListener
{
    /**
     * A test ended.
     *
     * @param Test  $test
     * @param float $time
     * @return void
     *
     * @throws ExpectationFailedException
     */
    public function endTest(Test $test, $time)
    {
        $execution = 1;

        if ($time >= $execution) {
            throw new ExpectationFailedException(
                'The test "'. $test->getName() .'" exceeded the runtime specified. Execution time: ' . number_format($time, 2) . 's'
            );
        }
    }
}
