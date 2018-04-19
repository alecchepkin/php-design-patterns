### State

#### Type: Behavioral

#### What it is:
Allow an object to alter its behavior when its internal state changes. The object will appear to change its class.

![State]

```php

$context = new context(new StateA());
$this->assertInstanceOf('Behavioral\State\State\A', $context->getState());

$context->request();
$this->assertInstanceOf('Behavioral\State\State\B', $context->getState());

$context->request();
$this->assertInstanceOf('Behavioral\State\State\C', $context->getState());

$context->request();
$this->assertInstanceOf('Behavioral\State\State\A', $context->getState());

```
_[ru][Ru State]_

[State]: https://github.com/olegre/DesignPatterns/blob/master/~images/State.png
[Ru State]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/State.png
