###Builder

####Type: Creational

####What it is:
Separate the construction of a complex object from its representing so that the same construction process can create different representations.

![Builder]

```php

$builder = new Builder\Car();
$manager = new Manager($builder);
$manager->buildProduct();
$product = $manager->getProduct();

$this->assertEquals("car", $product->getName());
$this->assertEquals(15000, $product->getPrice());

$builder = new Builder\Plane();
$manager = new Manager($builder);
$manager->buildProduct();
$product = $manager->getProduct();

$this->assertEquals("plane", $product->getName());
$this->assertEquals(100500, $product->getPrice());

```
_[ru][Ru Builder]_

[Builder]: https://github.com/olegre/DesignPatterns/blob/master/~images/Builder.png
[Ru Builder]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Builder.png
