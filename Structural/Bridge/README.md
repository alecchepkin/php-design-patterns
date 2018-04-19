### Bridge

#### Type: Structural

#### What it is:
Convert the interface of a class into another interface clients expect. Lets classes work together that couldn't otherwise because of incompatible interfaces.

![Bridge]

```php

$square = new SquareShape(new GreenColor());
$result =$square->applyColor();
$this->assertEquals('#00FF00', $result);

$circle = new SquareShape(new RedColor());
$result =$circle->applyColor();
$this->assertEquals('#FF0000', $result);


```
_[ru][Ru Bridge]_

[Bridge]: https://github.com/olegre/DesignPatterns/blob/master/~images/Bridge.png
[Ru Bridge]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Bridge.png
