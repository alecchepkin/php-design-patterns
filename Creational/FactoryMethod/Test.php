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
    $product = (new Factory\Plane())->instance();
    $this->assertInstanceOf('Creational\FactoryMethod\Product\Plane', $product);

    $product = (new Factory\Car())->instance();
    $this->assertInstanceOf('Creational\FactoryMethod\Product\Car', $product);

    }
}
