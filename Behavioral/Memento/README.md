###Memento

####Type: Behavioral

####What it is:
Without violating encapsulation, capture and externalize an object's internal state so that the object can be restored to this state later.

![Memento]

```php

$originator = new Originator();
$originator->setState("On");

$memento = $originator->createMemento();

$caretaker = new Caretaker();
$caretaker->setMemento($memento);

$originator->setState('Off');

$memento = $caretaker->getMemento();

$originator->restore($memento);

```
_[ru][Ru Memento]_

[Memento]: https://github.com/olegre/DesignPatterns/blob/master/~images/Memento.png
[Ru Memento]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Memento.png
