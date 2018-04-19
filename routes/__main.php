<?php
$app->get('/', function($request, $response){
    return $response->withJson(['msg' =>    'Hello World!'], 200);
});