###Builder

####Type: Creational

####What it is:
Separate the construction of a complex object from its representing so that the same construction process can create different representations.

![alt tag](https://habrastorage.org/getpro/habr/post_images/16b/2fe/a7f/16b2fea7f7f4dcd14fe2ad0b0bb9bf84.jpg)

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
