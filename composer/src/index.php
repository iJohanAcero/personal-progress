<?php

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Johan\Composer\Test;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('h:/personal-progress/composer/your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$test = new Test();
$test->hi();