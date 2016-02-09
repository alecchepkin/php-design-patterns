<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Structural\Proxy;


use Structural\Proxy\Image\Proxy as ProxyImage;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testProxy()
    {
        $image = new ProxyImage('photo_10000.jpg');

        $this->assertInstanceOf('Structural\Proxy\Image\Proxy', $image);
        $this->assertNull($image->getImage());

        $result = $image->display();

        $this->assertTrue($result);
        $this->assertInstanceOf('Structural\Proxy\Image\Real', $image->getImage());

    }
}
