<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 14:27
 */

namespace Creational\Builder\Builder;


use Creational\Builder\Builder;

class Car extends Builder
{
    public function buildName()
    {
        $this->product->setName("car");
    }
    public function buildPrice()
    {
        $this->product->setPrice(15000);
    }

}