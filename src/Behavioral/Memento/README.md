Memento

Type: Behavioral

Without violating encapsulation, capture and externalize an object's internal state so that the object can be restored to this state later.

```php
$originator = new Originator();
$originator->setState("On");

$this->assertEquals("On",$originator->getState());

$memento = $originator->createMemento();

$this->assertInstanceOf('Behavioral\Memento\Memento', $memento);

$caretaker = new Caretaker();
$caretaker->setMemento($memento);

$originator->setState('Off');
$this->assertEquals("Off",$originator->getState());

$memento = $caretaker->getMemento();
$this->assertInstanceOf('Behavioral\Memento\Memento', $memento);

$originator->restore($memento);
$this->assertEquals("On",$originator->getState());

```
