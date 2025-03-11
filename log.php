<?php
function log_action($message) {
    $logfile = 'logs/info.log';
    $timestamp = date("Y-m-d H:i:s");
    file_put_contents($logfile, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
}
?>