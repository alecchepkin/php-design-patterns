<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 15:56
 */

namespace Structural\Flyweight;


class Character
{
    private $name;

    /**
     * Character constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}