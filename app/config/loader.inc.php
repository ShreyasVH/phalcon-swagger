<?php

use Phalcon\Autoload\Loader;

$loader = new Loader();

$loader->setDirectories
(
    array
    (
        APP_PATH . 'app/controllers/',
        APP_PATH . 'app/scripts/'
    )

)->register();

$loader->setNamespaces
(
    array
    (
        'app\\controllers' => APP_PATH . 'app/controllers',
        'app\\config' => APP_PATH . 'app/config',
        'app\\scripts' => APP_PATH . 'app/scripts',
        'OpenApi' => APP_PATH . 'vendor/zircote/swagger-php/src'
    )

)->register();