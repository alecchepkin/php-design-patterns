<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 11:47
 */

namespace Creational\Singleton;

class Test extends \PHPUnit_Framework_TestCase {

    public function testSingleton(){
        $singleton = Singleton::instance();
        $singleton2 = Singleton::instance();
        $this->assertTrue($singleton===$singleton2);
    }

}
