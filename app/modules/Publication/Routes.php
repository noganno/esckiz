<?php

namespace Publication;

use Publication\Model\Publication;
use Publication\Model\Type;

class Routes
{

    public function init($router)
    {
        $types_keys = array_keys(Type::types());
        $types_regex = '(' . implode('|', $types_keys) . ')';

        $router->add('/publication/admin/{type:' . $types_regex . '}', array(
            'module' => 'publication',
            'controller' => 'admin',
            'action' => 'index'
        ))->setName('publications_admin');

        $router->add('/publication/admin/{type:' . $types_regex . '}/([a-zA-Z0-9_]+)', array(
            'module' => 'publication',
            'controller' => 'admin',
            'action' => 2
        ))->setName('publications_admin_action');

        $router->addML('/{type:' . $types_regex . '}', array(
            'module' => 'publication',
            'controller' => 'index',
            'action' => 'index'
        ), 'publications');

        $router->addML('/services', array(
            'module' => 'publication',
            'controller' => 'index',
            'action' => 'services'
        ), 'services');

        $router->addML('/{type:' . $types_regex . '}/{slug:[a-zA-Z0-9_-]+}', array(
            'module' => 'publication',
            'controller' => 'index',
            'action' => 'publication'
        ), 'publication');

        return $router;

    }

}