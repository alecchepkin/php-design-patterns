<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 13:04
 */

namespace Structural\Decorator\Decorator;


use Structural\Decorator\Decorator;
use Structural\Decorator\Widget;

class Border extends Decorator
{

    public function draw()
    {
        printf("Draw Border\n");
        return parent::draw();
    }
}