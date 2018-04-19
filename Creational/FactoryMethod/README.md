### FactoryMethod

#### Type: Creational

#### What it is:
Define an interface for creating an object, but let subclasses decide which class to instantiate. Lets a class defer instantiation to subclasses.

![FactoryMethod]

```php

$factory = (new Factory\Plane())->instance();
$this->assertInstanceOf('Creational\FactoryMethod\Product\Plane', $factory);

$factory = (new Factory\Car())->instance();
$this->assertInstanceOf('Creational\FactoryMethod\Product\Car', $factory);

```
_[ru][Ru FactoryMethod]_

[FactoryMethod]: https://github.com/olegre/DesignPatterns/blob/master/~images/FactoryMethod.png
[Ru FactoryMethod]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/FactoryMethod.png
