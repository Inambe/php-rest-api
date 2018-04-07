<?php
require_once 'vendor/autoload.php';

use Slim\App;
use Slim\Middleware\TokenAuthentication;

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];
$app = new App($config);

// Database Options
define("DSN", 'mysql:host=localhost;dbname=database;charset=utf8');
define('USR', 'root');
define('PWD', '');
// Database Options END

// Token authentication
$authenticator = function($request, TokenAuthentication $tokenAuth){
    $token = $tokenAuth->findToken($request);
    // Token verification
    if($token !== "1234"){
        throw new \app\UnauthorizedException('Invalid Token');
    }
};
$app->add(new TokenAuthentication([
    'path' =>   '/private',
    'authenticator' => $authenticator
]));
// Token authentication END

// Routes
// Public route
$app->get('/', function($request, $response){
    return $response->withJson(['data' => 'Public Route'], 200);
});
// Token restricted route
$app->get('/private', function($request, $response){
    $output = \app\Book::getData();
    return $response->withJson($output, 200);
});
// Routes END

$app->run();