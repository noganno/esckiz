<?php

namespace Index;

class Routes
{

    public function init($router)
    {
        $router->addML('/', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'index',
        ), 'index');

        return $router;

    }

}