<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 11:51
 */

namespace Creational\Singleton;


class Singleton {

    static private $instance;

    private function __construct()
    {
    }

    static public function instance()
    {
        if(null == self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

}