<?php

use Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

$app = new Application();

$app['debug'] = true;

$app->register(new DoctrineServiceProvider(), array(
    'db.options'    => array(
    'driver'        => 'pdo_mysql',
    'host'          => 'localhost',
    'dbname'        => 'testing',
    'user'          => 'root',
    'password'      => 'root',
    'charset'       => 'utf8',
    'driverOptions' => array(1002 => 'SET NAMES utf8',),
  ),
));

$app->register(new DoctrineOrmServiceProvider, array(
    "orm.em.options" => array(
         "mappings" => array(
            array(
               "type"      => "xml",
               "namespace" => "Julian\Entity",
               "path"      => realpath(__DIR__."/../config/doctrine/mapping"),
              ),
            ),
         ),
));

return $app;
