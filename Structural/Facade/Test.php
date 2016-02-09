<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Structural\Facade;


class Test extends \PHPUnit_Framework_TestCase
{
    public function testFacade()
    {
        $computer = new ComputerFacade;
        $result = $computer->start();
        $this->assertNotEmpty($result);
    }
}
