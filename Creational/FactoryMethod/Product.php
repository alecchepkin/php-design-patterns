<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 13:29
 */

namespace Creational\FactoryMethod;


abstract class Product {
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}