<?php
namespace Julian\Controllers;

use Faker\Factory;
use Julian\Entity\Personaje;
use Silex\Application;
use Silex\ControllerProviderInterface;
 
class ViewAllPersonajesController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
 
        $controllers
            ->get('/', array($this, 'Index'))
            ->bind('index')
        ;
        
        $controllers    
            ->get('/generaPersonajes/', array($this, 'generaPersonajes'))
            ->bind('generaPersonajes')
        ;
        return $controllers;
    }
 
    public function Index(Application $app)
    {
        $entity_manager = $app["orm.em"];

        $personajes = $entity_manager->getRepository("Julian\Entity\Personaje")
                                  ->findAll();

        $resp = array();
        foreach($personajes as $p)
        {
            $resp[] = $p->getJson();
        }
        return $app->json($resp);
    }
 
    public function generaPersonajes(Application $app)
    {   
        $entity_manager = $app["orm.em"];
        $resp = "";
        $faker = Factory::create('es_ES');
        $personaje = new Personaje();
        for($i=0; $i<20; $i++)
        {
            $personaje->setNombre($faker->unique()->username());
            $personaje->setDescripcion($faker->text());
            $personaje->setFechaCreacion($faker->dateTimeBetween('-20 years', '-10 years'));
            $personaje->setRiqueza($faker->numberBetween('0', '20'));
            $personaje->setFuerza($faker->numberBetween('0', '20'));
            $personaje->setInteligencia($faker->numberBetween('0', '20'));
            $personaje->setEshumano($faker->boolean());
            
            $entity_manager->persist($personaje);
            $resp.= "Agregado el personaje: ".$personaje->getNombre()."<br />";
        }
        $entity_manager->flush();
        
        return $resp;
    }
}
