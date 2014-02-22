<?php

namespace Julian\Controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;

class IndexController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
 
        $controllers
            ->get('/', array($this, 'Index'))
            ->bind('view_all')
        ;
        
        $controllers    
            ->get('/muestraPersonajes/', array($this, 'muestraPersonajes'))
            ->bind('insertaPersonajes')
        ;
        return $controllers;
    }
 
    public function Index()
    {
        return 'Index de la aplicacion';
    }
 
    public function muestraPersonajes(Application $app)
    {   
        $entity_manager = $app["orm.em"];
        $personajes = $entity_manager->getRepository("Julian\Entity\Personaje")
                                     ->findAll();
        $resp = "";
        foreach($personajes as $personaje)
        {
            $resp .= $personaje->getNombre() . "<br />";
        }
        
        return $resp;
    }
}

