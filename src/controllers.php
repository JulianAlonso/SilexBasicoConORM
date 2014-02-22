<?php

use Faker\Factory;
use Julian\Entity\Personaje;

$app->get('/', function () use ($app) {
        
    $faker = Factory::create('es_ES');
    $personaje = new Personaje();           
    $personaje->setNombre($faker->unique()->username());
    $personaje->setDescripcion($faker->text());
    $personaje->setFechaCreacion($faker->dateTimeBetween('-20 years', '-10 years'));
    $personaje->setRiqueza($faker->numberBetween('0', '20'));
    $personaje->setFuerza($faker->numberBetween('0', '20'));
    $personaje->setInteligencia($faker->numberBetween('0', '20'));
    $personaje->setEshumano($faker->boolean());

    $entity_manager = $app["orm.em"];

    //$entity_manager->persist($personaje);
    //$entity_manager->flush();

    $personajes = $entity_manager->getRepository("Julian\Entity\Personaje")
                              ->findAll();
    
    $resp = array();
    foreach($personajes as $p)
    {
        $resp[] = $p->getJson();
    }
    return $app->json($resp);
});



