<?php

return [
    'base_path' => '/',    

    'database'  => [
        'adapter'  => 'Mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'cms',
        'charset'  => 'utf8',
    ],

    'memcache'  => [
        'host' => 'localhost',
        'port' => 11211,
    ],

    'memcached'  => [
        'host' => 'localhost',
        'port' => 11211,
    ],    

    'cache'     => 'file', // memcache, memcached
];