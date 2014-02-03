<?php namespace GuilhermeGuitte\LaravelSlowTest;

trait MethodTrait {
    public function addError(PHPUnit_Framework_Test $test, Exception $e, $time){}

    public function addFailure(PHPUnit_Framework_Test $test, PHPUnit_Framework_AssertionFailedError $e, $time){}

    public function addIncompleteTest(PHPUnit_Framework_Test $test, Exception $e, $time){}

    public function addSkippedTest(PHPUnit_Framework_Test $test, Exception $e, $time){}

    public function startTest(PHPUnit_Framework_Test $test){}

    public function startTestSuite(PHPUnit_Framework_TestSuite $suite){}

    public function endTestSuite(PHPUnit_Framework_TestSuite $suite){}
}
