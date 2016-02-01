###Iterator

####Type: Behavioral

####What it is:
Provide a way to access the elements of an aggregate object sequentially without exposing its underlying representation.

![alt tag](https://habrastorage.org/getpro/habr/post_images/af1/992/b68/af1992b6809a68dd7743f8e7756ad635.jpg)

```php

$aggregator = new Aggregator\Shop();
$iterator = $aggregator->createIterator();

$this->assertEquals(1, $iterator->next());
$this->assertEquals(2, $iterator->next());
$this->assertEquals(3, $iterator->next());
$this->assertEquals(null, $iterator->next());

```
