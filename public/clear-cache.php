<?php
// TEMPORARY FILE - DELETE AFTER USE
// Access: https://www.agfsas.com.co/clear-cache.php

echo "Clearing Laravel cache...<br>";

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "Config cache: ";
$kernel->call('config:clear');
echo "✓<br>";

echo "Application cache: ";
$kernel->call('cache:clear');
echo "✓<br>";

echo "View cache: ";
$kernel->call('view:clear');
echo "✓<br>";

echo "Route cache: ";
$kernel->call('route:clear');
echo "✓<br>";

echo "<br><strong>Cache cleared successfully!</strong><br>";
echo "<br><strong style='color:red;'>IMPORTANT: Delete this file (clear-cache.php) immediately for security!</strong>";
