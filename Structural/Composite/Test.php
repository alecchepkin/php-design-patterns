<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Structural\Composite;


use Structural\Composite\Text\Character;
use Structural\Composite\Text\Sentence;
use Structural\Composite\Text\Word;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testComposite()
    {
        $sentence = new Sentence();
        $wHello = new Word();
        $wHello->add(new Character('H'));
        $wHello->add(new Character('e'));
        $wHello->add(new Character('l'));
        $wHello->add(new Character('l'));
        $wHello->add(new Character('o'));

        $sentence->add($wHello);
        $sentence->add(new Character(','));
        $sentence->add(new Character(' '));

        $wWorld = new Word();
        $wWorld->add(new Character('w'));
        $wWorld->add(new Character('o'));
        $wWorld->add(new Character('r'));
        $wWorld->add(new Character('l'));
        $wWorld->add(new Character('d'));

        $sentence->add($wWorld);

        $sentence->add(new Character('!'));

        $this->assertEquals('Hello, world!', $sentence->display());

    }
}
