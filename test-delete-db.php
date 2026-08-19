<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pkg = \App\Models\Package::first();
if ($pkg) {
    echo "Found package: " . $pkg->id . "\n";
    $result = $pkg->delete();
    echo "Delete result: " . ($result ? 'true' : 'false') . "\n";
} else {
    echo "No packages found\n";
}
