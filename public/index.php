<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';


$product = [
    ['productname' => 'UX/UI', 'description' => 'Lorem 25'],
];


$app = new \Slim\App;
$app->get('/product', function (Request $request, Response $response, array $args) use($product) {

    return $response->withJson($product);
});
$app->run();