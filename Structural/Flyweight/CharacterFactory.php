<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 15:51
 */

namespace Structural\Flyweight;


class CharacterFactory
{
    private $characters = [];

    public function findCharacter($name)
    {
        if(false == key_exists($name, $this->characters)){
            $this->characters[$name] = new Character($name);
        }
        return $this->characters[$name];
    }
}