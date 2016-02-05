<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Behavioral\Adapter;

use Structural\Adapter\RectangleLegacy;
use Structural\Adapter\Shape\Rectangle as RectangleShapeAdapter;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testAdapter()
    {
        $rectangle = new RectangleShapeAdapter(new RectangleLegacy());
        $result = $rectangle->display($x1=10, $y1=10, $x2=20, $y2=20);
        $this->assertTrue($result);

    }
}
