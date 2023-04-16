<?php

use Illuminate\Support\Facades\File;

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/' && File::exists(__DIR__.'/'. $uri)) {
    return false;
}

require_once __DIR__.'/index.php';
