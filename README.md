# Laravel slow tests

_Showing tests that are very slow to running._

![Example:][1]

#Quick start

## Setup

In the `require` key of your `composer.json` add the following line:

    "guilhermeguitte/laravel-slow-test": "dev-master"

Run the Composer update command:

    $ composer update


Add in your `phpunit.xml`

    <phpunit>
     ...
        <listeners>
        <listener class="RunTimeListener" file="app/tests/RunTimeListener.php"/>
        </listeners>
    </phpunit>

## Configuration

You can specify the maximum execution by tests (default value is `100 ms`), creating `test.php` at `app/config` folder:

    <? php 
        return array(
            'max_execution_time' => 50 // ms
        );
    

## Why be careful with this?

Following principles of Uncle Bob (Robert C. Martin), the Clean Code book, he says that all tests should be FIRST, speaking of ** F ** specifically:

 - **F** ast: All tests must run fast, slowness is a code smell for dependent tests and design problems. If they are slow you end up not running often doesn't have feeback early about a possible problem in the code.

**Laravel Slow Test** aims to assist in finding slow down. 
Initially, a small project you do not notice much difference, few tests, but when the project grows, you see how that makes a big difference.

Stay tuned!

#License

Laravel-slow-test is free software distributed under the terms of the MIT license

  [1]: https://dl.dropboxusercontent.com/u/106483810/phpunit.png
