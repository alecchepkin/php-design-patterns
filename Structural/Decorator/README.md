###Decorator

####Type: Structural

####What it is:


![Decorator]

```php

$widget = new BorderDecorator(
    new ScrollDecorator(
        new TextField(100, 40)
    )
);
$result = $widget->draw();
$this->assertTrue($result);

```
_[ru][Ru Decorator]_

[Decorator]: https://github.com/olegre/DesignPatterns/blob/master/~images/Decorator.png
[Ru Decorator]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Decorator.png
