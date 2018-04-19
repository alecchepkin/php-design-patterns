### Iterator

#### Type: Behavioral

#### What it is:
Provide a way to access the elements of an aggregate object sequentially without exposing its underlying representation.

![Iterator]

```php

$aggregator = new Aggregator\Shop();
$iterator = $aggregator->createIterator();

$this->assertEquals(1, $iterator->next());
$this->assertEquals(2, $iterator->next());
$this->assertEquals(3, $iterator->next());
$this->assertEquals(null, $iterator->next());

```
_[ru][Ru Iterator]_

[Iterator]: https://github.com/olegre/DesignPatterns/blob/master/~images/Iterator.png
[Ru Iterator]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Iterator.png
