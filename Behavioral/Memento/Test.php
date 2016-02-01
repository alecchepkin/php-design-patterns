<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 13:20
 */

namespace Behavioral\Memento;


class Test extends \PHPUnit_Framework_TestCase
{
    public function testMemento()
    {
        $originator = new Originator();
        $originator->setState("On");

        $this->assertEquals("On",$originator->getState());

        $memento = $originator->createMemento();

        $this->assertInstanceOf('Behavioral\Memento\Memento', $memento);

        $caretaker = new Caretaker();
        $caretaker->setMemento($memento);

        $originator->setState('Off');
        $this->assertEquals("Off",$originator->getState());

        $memento = $caretaker->getMemento();
        $this->assertInstanceOf('Behavioral\Memento\Memento', $memento);

        $originator->restore($memento);
        $this->assertEquals("On",$originator->getState());

    }
}
