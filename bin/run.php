<?php
require_once __DIR__ . '/../vendor/autoload.php';

try {
    $app = new \App\Kernel\Application();
    $app->test();
} catch (\Throwable $e) {
    echo $e->getMessage() . PHP_EOL;
}