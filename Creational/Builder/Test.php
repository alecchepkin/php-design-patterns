<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 13:51
 */

namespace Creational\Builder;


class Test extends \PHPUnit_Framework_TestCase
{

    public function testProductCar(){
        $builder = new Builder\Car();
        $manager = new Manager($builder);
        $manager->buildProduct();
        $product = $manager->getProduct();

        $this->assertEquals("car", $product->getName());
        $this->assertEquals(15000, $product->getPrice());
    }
    public function testProductPlane(){
        $builder = new Builder\Plane();
        $manager = new Manager($builder);
        $manager->buildProduct();
        $product = $manager->getProduct();

        $this->assertEquals("plane", $product->getName());
        $this->assertEquals(100500, $product->getPrice());
    }
}
