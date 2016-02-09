<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Structural\Flyweight;

use Structural\Flyweight\CharacterFactory as CharacterFactoryFlyweight;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testFlyweight()
    {

        $factory = new CharacterFactoryFlyweight();
        $character1 = $factory->findCharacter('A');
        $character2 = $factory->findCharacter('A');
        $character3 = $factory->findCharacter('B');

        $this->assertInstanceOf('Structural\Flyweight\Character', $character1);
        $this->assertInstanceOf('Structural\Flyweight\Character', $character2);
        $this->assertInstanceOf('Structural\Flyweight\Character', $character3);

        $this->assertTrue($character1 === $character2);
        $this->assertFalse($character1 === $character3);
    }
}
