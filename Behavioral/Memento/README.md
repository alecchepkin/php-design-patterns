###Memento

####Type: Behavioral

####What it is:
Without violating encapsulation, capture and externalize an object's internal state so that the object can be restored to this state later.

![alt tag](https://habrastorage.org/getpro/habr/post_images/c08/bf1/7ee/c08bf17ee80d42272441cafbcce1a2dd.jpg)

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
