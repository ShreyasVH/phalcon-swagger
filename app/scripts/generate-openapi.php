<?php
namespace app\scripts;

define('APP_PATH', dirname(dirname(__DIR__)) . '/');

require_once APP_PATH . 'vendor/autoload.php';

include APP_PATH . 'app/config/loader.inc.php';

$swagger = \OpenApi\Generator::scan([
    APP_PATH . 'app/controllers', // Path to your Phalcon controllers
]);

// Configure additional options if needed
$swagger->info->title = 'My API';
$swagger->info->version = '1.0.0';

// Save the generated OpenAPI specification to a file
file_put_contents('public/swagger.json', $swagger->toJson());