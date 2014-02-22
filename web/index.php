<?php
//Cargamos el autoload.
require_once __DIR__.'/../vendor/autoload.php';

//Creamos la app. 
//Ademas le cargamos el ORM y el DBAL.
$app = require __DIR__.'/../src/app.php';
//Cargamos los controladores.
require __DIR__.'/../src/loader.php';

//La ejecutamos.
$app->run();
