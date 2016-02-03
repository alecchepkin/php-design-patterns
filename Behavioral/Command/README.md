###Command

####Type: Behavioral

####What it is:
Encapsulate a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations.

![Command]

```php

$window = new Window();
$calculator = new Calculator();

$window->placeOperation(new Plus($calculator, 10));

$window->placeOperation(new Minus($calculator, 4));

$window->placeOperation(new Multiplication($calculator, 3));

$window->placeOperation(new Division($calculator, 2));

```
_[ru][Ru Command]_

[Command]: https://github.com/olegre/DesignPatterns/blob/master/~images/Command.png
[Ru Command]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Command.png
