<?php

require __DIR__ . '/../vendor/autoload.php';

use Controllers\MainController;
use Leaf\App;

$app = new App([
    'debug' => false,
]);

$app->get('/', MainController::class . '@index');

$app->post('/generate', MainController::class . '@generate');

$app->run();
