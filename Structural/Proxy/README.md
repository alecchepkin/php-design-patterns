###Proxy

####Type: Structural

####What it is:
Provide a surrogate or placeholder for another object to control access to it.

![Proxy]

```php

$image = new ProxyImage('photo_10000.jpg');

$this->assertInstanceOf('Structural\Proxy\Image\Proxy', $image);
$this->assertNull($image->getImage());

$result = $image->display();

$this->assertTrue($result);
$this->assertInstanceOf('Structural\Proxy\Image\Real', $image->getImage());

```
_[ru][Ru Proxy]_

[Proxy]: https://github.com/olegre/DesignPatterns/blob/master/~images/Proxy.png
[Ru Proxy]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Proxy.png
