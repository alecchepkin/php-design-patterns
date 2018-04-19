### Command

#### Type: Behavioral

#### What it is:
Encapsulate a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations.

![Command]

```php

$window = new Window();
$calculator = new Calculator();

$window->placeOperation(new Plus($calculator, 10));
$this->assertEquals(10, $calculator->getResult());

$window->placeOperation(new Minus($calculator, 4));
$this->assertEquals(6, $calculator->getResult());

$window->placeOperation(new Multiplication($calculator, 3));
$this->assertEquals(18, $calculator->getResult());

$window->placeOperation(new Division($calculator, 2));
$this->assertEquals(9, $calculator->getResult());

```
_[ru][Ru Command]_

[Command]: https://github.com/olegre/DesignPatterns/blob/master/~images/Command.png
[Ru Command]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Command.png
