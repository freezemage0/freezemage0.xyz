<?php


use DI\Bridge\Slim\Bridge;
use DI\ContainerBuilder;
use Freezemage\Blog\Controller;


require_once __DIR__ . '/vendor/autoload.php';

$builder = new ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/config.php');
$container = $builder->build();

$application = Bridge::create($container);

$application->get('/', [Controller::class, 'greet']);
$application->get('/{name}', [Controller::class, 'greet']);
$application->run();