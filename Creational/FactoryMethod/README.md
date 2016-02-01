###FactoryMethod

####Type: Creational

####What it is:
Define an interface for creating an object, but let subclasses decide which class to instantiate. Lets a class defer instantiation to subclasses.

![alt tag](https://habrastorage.org/getpro/habr/post_images/a79/c7d/d5e/a79c7dd5eaba210f19e194f2b97434d0.jpg)

```php

$factory = (new Factory\Plane())->instance();
$this->assertInstanceOf('Creational\FactoryMethod\Product\Plane', $factory);

$factory = (new Factory\Car())->instance();
$this->assertInstanceOf('Creational\FactoryMethod\Product\Car', $factory);

```
