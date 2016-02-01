<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 12:20
 */

namespace Creational\Prototype;


use Creational\Prototype\Book\MySQL as MySQLBookPrototype;

class Test extends \PHPUnit_Framework_TestCase {

    public function testPrototype(){
        $prototype = new MySQLBookPrototype();
        $clone = clone $prototype;

        $this->assertEquals($prototype, $clone);
        $this->assertTrue($prototype !== $clone);
    }
}
