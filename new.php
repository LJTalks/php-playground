<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create the logger
$logger = new Logger('my_logger');
$logger->pushHandler(new StreamHandler('app.log', Logger::DEBUG));

// Add logs
$logger->info('This is an info log.');
$logger->error('This is an error log.');

echo "Logs have been written to app.log\n";
