<?php namespace GuilhermeGuitte\LaravelSlowTest;
use Config;

class RunTimeListener implements \PHPUnit_Framework_TestListener
{
    use MethodTrait;

    function __construct() { }

    public function endTest(\PHPUnit_Framework_Test $test, $time)
    {
        $execution = Config::get('test.max_execution_time', 100);

        if ( $time >= $execution ) {
            $message = 'This test exceeded the run time specified. Execution time: ' .
                $time . ' ms';

            throw new \PHPUnit_Framework_ExpectationFailedException(
                $message
            );
        }
    }
}
