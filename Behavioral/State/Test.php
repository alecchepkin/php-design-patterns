<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Behavioral\State;


use Behavioral\State\State\A as StateA;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testObserver()
    {
        $context = new context(new StateA());
        $this->assertInstanceOf('Behavioral\State\State\A', $context->getState());

        $context->request();
        $this->assertInstanceOf('Behavioral\State\State\B', $context->getState());

        $context->request();
        $this->assertInstanceOf('Behavioral\State\State\C', $context->getState());

        $context->request();
        $this->assertInstanceOf('Behavioral\State\State\A', $context->getState());

    }
}
