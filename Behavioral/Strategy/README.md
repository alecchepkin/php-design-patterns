###Strategy

####Type: Behavioral

####What it is:
Define a family of algorithms, encapsulate each one, and make them interchangeable. Lets the algorithm vary independently from clients that use it.

![Strategy]

```php

$customer = new Customer(new NormalBillingStrategy);
$customer->addToBilling($price=2.5, $quantity=2);
$this->assertEquals(5.0, $customer->sumOfBilling());

$customer->setStrategy(new HappyHourBillingStrategy);
$customer->addToBilling($price=2.5, $quantity=4);
$this->assertEquals(10.0, $customer->sumOfBilling());

```
_[ru][Ru Strategy]_

[Strategy]: https://github.com/olegre/DesignPatterns/blob/master/~images/Strategy.png
[Ru Strategy]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Strategy.png
