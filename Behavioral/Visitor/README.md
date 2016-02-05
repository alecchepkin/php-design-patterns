###Visitor

####Type: Behavioral

####What it is:
Represent an operation to be performed on the elements of an object structure. Lets you define a new operation without changing the classes of the elements on which it operates.

![Visitor]

```php

$visitor  = new PriceItemVisitor();
$item = new BookItem($name = "Im Westen nichts Neues, Erich Maria Remarque", $price = 22.50);
$price = $item->accept($visitor);
$this->assertEquals(17.5, $price);

$item = new FruitItem($name = "apple", $pricePerKg = 1.5, $weight = 2);
$price = $item->accept($visitor);
$this->assertEquals(3.0, $price);

```
_[ru][Ru Visitor]_

[Visitor]: https://github.com/olegre/DesignPatterns/blob/master/~images/Visitor.png
[Ru Visitor]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Visitor.png
