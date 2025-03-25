<?php
require_once 'vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Ensure the logs directory exists
$logDir = __DIR__ . '/logs';
if (!is_dir($logDir)) {
    mkdir($logDir, 0777, true);
}

// Create a Monolog logger instance
$log = new Logger('ThinkPHP');
$log->pushHandler(new StreamHandler($logDir . '/info.log', Level::Debug));

function log_action($message) {
    global $log;
    $log->info($message);
}
?>