### Prototype

#### Type: Creational

#### What it is:
Define an interface for creating an object, but let subclasses decide which class to instantiate. Lets a class defer instantiation to subclasses.


![Prototype]

```php

$prototype = new MySQLBookPrototype();
$clone = clone $prototype;

$this->assertEquals($prototype, $clone);
$this->assertTrue($prototype !== $clone);

```
_[ru][Ru Prototype]_

[Prototype]: https://github.com/olegre/DesignPatterns/blob/master/~images/Prototype.png
[Ru Prototype]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Prototype.png
