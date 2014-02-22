<?php
//Cargamos los controladores.
$app->mount('/verPersonaje/', new \Julian\Controllers\ViewPersonajeController());
$app->mount('/listarPersonajes/', new \Julian\Controllers\ViewAllPersonajesController());
$app->mount('/', new Julian\Controllers\IndexController());