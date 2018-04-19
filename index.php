<?php
require_once 'vendor/autoload.php';
require_once 'config/app.php';

use Slim\App;
use Slim\Middleware\TokenAuthentication;
use Medoo\Medoo;

$config = [
    'settings' => [
        'displayErrorDetails' => $app_options['error_reporting']
    ]
];
$app = new App($config);

// Setting db
$container = $app->getContainer();
$container['db'] = $app_options['using_db'] ? function () use ($db_config) {
	return new Medoo($db_config);
} : null;
//

// Loading route files
$routesDir = scandir("routes/");
$routesFiles  = preg_grep ('/^\_\_/', $routesDir);
foreach($routesFiles as $routesFile){
    include_once 'routes/' . $routesFile;
}
//

$app->run();