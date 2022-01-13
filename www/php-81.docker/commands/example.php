<?php

/*
 * This script should be executed every minute by CRON
 */

file_put_contents(
    __DIR__ . '/progress.log',
    date('[Y-m-d H:i:s]') . ' - executed' . PHP_EOL,
    FILE_APPEND
);

echo 'executed';
