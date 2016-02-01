<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 13:17
 */

namespace Creational\FactoryMethod;


class Test extends \PHPUnit_Framework_TestCase {

    public function testFactoryMethod(){
    $factory = (new Factory\Plane())->instance();
    $this->assertInstanceOf('Creational\FactoryMethod\Product\Plane', $factory);

    $factory = (new Factory\Car())->instance();
    $this->assertInstanceOf('Creational\FactoryMethod\Product\Car', $factory);

    }
}
