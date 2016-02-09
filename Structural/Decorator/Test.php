<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Structural\Decorator;

use Structural\Decorator\Decorator\Border as BorderDecorator;
use Structural\Decorator\Decorator\Scroll as ScrollDecorator;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testDecorator()
    {
        $widget = new BorderDecorator(
            new ScrollDecorator(
                new TextField(100, 40)
            )
        );
        $result = $widget->draw();
        $this->assertTrue($result);
    }
}
