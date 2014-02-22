<?php

namespace Julian\Controllers;
 
use Silex\Application;
use Silex\ControllerProviderInterface;
 
class ViewPersonajeController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
 
        $controllers
            ->get('/', array($this, 'Index'))
            ->bind('index')
        ;
 
        $controllers
            ->get('/showPersonaje/{id}', array($this, 'Show'))
            ->bind('showPersonaje/{id}')
        ;
 
        return $controllers;
    }
 
    public function Index()
    {
        return 'Index de ViewPersonajeController';
    }
 
    public function Show(Application $app, $id)
    {   
        $entity_manager = $app["orm.em"];
        $personaje = $entity_manager->getRepository("Julian\Entity\Personaje")
                              ->findOneById($id);
        
        return $app->json($personaje->getJson());
    }
}