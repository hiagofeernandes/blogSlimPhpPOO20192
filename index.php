<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Página Inicial!");
    return $response;
});
$app->post('/criarpost', function () {
    $response->getBody()->write("Criar POST");
    return $response;
});
$app->get('/ler', function (Request $request, Response $response, $args) {
    $response->getBody()->write("ler");
    return $response;
});
$app = new \Slim\Slim();
$app->put('/atualizar/:id', function ($id) {
    //Update book identified by $id
});
$app->delete('/delete', function (Request $request, Response $response, $args) {
    //Delete book identified by $id
});





$app->run();
