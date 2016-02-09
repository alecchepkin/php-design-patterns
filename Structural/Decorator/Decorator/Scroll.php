<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 13:05
 */

namespace Structural\Decorator\Decorator;


use Structural\Decorator\Decorator;

class Scroll extends Decorator
{
    public function draw()
    {
        printf("Draw Scroll\n");
        return parent::draw();
    }

}