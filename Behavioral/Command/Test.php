<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 27/01/16
 * Time: 10:29
 */

namespace Behavioral\Command;



use Behavioral\Command\Operation\Division;
use Behavioral\Command\Operation\Minus;
use Behavioral\Command\Operation\Multiplication;
use Behavioral\Command\Operation\Plus;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testCalculate()
    {
        $window = new Window();
        $calculator = new Calculator();

        $window->placeOperation(new Plus($calculator, 10));
        $this->assertEquals(10, $calculator->getResult());

        $window->placeOperation(new Minus($calculator, 4));
        $this->assertEquals(6, $calculator->getResult());

        $window->placeOperation(new Multiplication($calculator, 3));
        $this->assertEquals(18, $calculator->getResult());

        $window->placeOperation(new Division($calculator, 2));
        $this->assertEquals(9, $calculator->getResult());

    }
}
