###Adapter

####Type: Structural

####What it is:
Convert the interface of a class into another interface clients expect. Lets classes work together that couldn't otherwise because of incompatible interfaces.

![Adapter]

```php

$rectangle = new RectangleShapeAdapter(new RectangleLegacy());
$result = $rectangle->display($x1=10, $y1=10, $x2=20, $y2=20);
$this->assertTrue($result);

```
_[ru][Ru Adapter]_

[Adapter]: https://github.com/olegre/DesignPatterns/blob/master/~images/Adapter.png
[Ru Adapter]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Adapter.png
