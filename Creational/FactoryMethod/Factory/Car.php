<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 13:26
 */

namespace Creational\FactoryMethod\Factory;

use Creational\FactoryMethod\Factory;
use Creational\FactoryMethod\Product\Car as CarProduct;

class Car extends Factory{

    public function instance()
    {
        return new CarProduct();
    }

}