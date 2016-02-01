###Command

####Type: Behavioral

####What it is:
Encapsulate a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations.

![alt tag](https://habrastorage.org/getpro/habr/post_images/0b9/09b/8fb/0b909b8fbe9fa7d4c02225c2004cb126.jpg)

```php

$window = new Window();
$calculator = new Calculator();

$window->placeOperation(new Plus($calculator, 10));

$window->placeOperation(new Minus($calculator, 4));

$window->placeOperation(new Multiplication($calculator, 3));

$window->placeOperation(new Division($calculator, 2));

```
