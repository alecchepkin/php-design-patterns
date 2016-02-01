Memento

Type: Behavioral

Without violating encapsulation, capture and externalize an object's internal state so that the object can be restored to this state later.

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
