<?php

/**
 * Meta
 */

namespace Application\Mvc\Helper;

class Meta extends \Phalcon\Mvc\User\Component
{

    private static $instance;
    private static $storage = [];

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Meta();
        }
        return self::$instance;

    }

    public function set($name, $content)
    {
        self::$storage[$name] = $content;
    }

    public function get($name)
    {
        if (array_key_exists($name, self::$storage)) {
            $content = self::$storage[$name];
            $escaper = new \Phalcon\Escaper();
            return "<meta name=\"{$name}\" content=\"{$escaper->escapeHtml($content)}\">\n";
        }
    }

    public function getOG($name)
    {
        if (array_key_exists($name, self::$storage)) {
            $content = self::$storage[$name];
            $escaper = new \Phalcon\Escaper();
            return "<meta property=\"og:{$name}\" content=\"{$escaper->escapeHtml($content)}\">\n";
        }
    }

}
