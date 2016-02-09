<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Structural\Bridge;

use Structural\Bridge\Shape\Square as SquareShape;
use Structural\Bridge\Color\Green as GreenColor;
use Structural\Bridge\Color\Red as RedColor;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testBridge()
    {
        $square = new SquareShape(new GreenColor());
        $result =$square->applyColor();
        $this->assertEquals('#00FF00', $result);

        $circle = new SquareShape(new RedColor());
        $result =$circle->applyColor();
        $this->assertEquals('#FF0000', $result);

    }
}
