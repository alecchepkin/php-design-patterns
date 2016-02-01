Mediator

Type: Behavioral

Define an object that encapsulates how a set of objects interact. Promotes loose coupling by keeping objects from referring to each other explicitly and it lets you vary their interactions independently.

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
