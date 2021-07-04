<?php
require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// use Dotenv\Dotenv;

// create a log channel
$log = new Logger('name');

$log->pushHandler(new StreamHandler(__DIR__.'/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
