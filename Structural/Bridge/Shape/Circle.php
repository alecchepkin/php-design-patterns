<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 15:43
 */

namespace Structural\Bridge\Shape;


use Structural\Bridge\Shape;

class Circle extends Shape
{

    public function applyColor()
    {
        return $this->color->applyColor();
    }
}