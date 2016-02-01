<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 14:27
 */

namespace Creational\Builder\Builder;


use Creational\Builder\Builder;

class Plane extends Builder
{
    public function buildName()
    {
        $this->product->setName("plane");
    }
    public function buildPrice()
    {
        $this->product->setPrice(100500);
    }

}