<?php


use App\Controllers\LocadoraController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

// =====================================

$app->get('/carro', LocadoraController::class . ':getCarros');
$app->post('/carro', LocadoraController::class . ':insertCarro');
$app->put('/carro', LocadoraController::class . ':updateCarro');
$app->delete('/carro', LocadoraController::class . ':deleteCarro');


$app->put('/alugar', LocadoraController::class . ':alugarCarro');
$app->put('/devolver', LocadoraController::class . ':devolverCarro');

// =====================================


$app->run();