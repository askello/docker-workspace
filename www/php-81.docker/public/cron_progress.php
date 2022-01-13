<?php

$file = __DIR__ . '/../commands/progress.log';

if (!file_exists($file)) {
    die('No progress yet. Please, wait one minute and try again');
}

echo '<pre>' . file_get_contents($file) . '</pre>';