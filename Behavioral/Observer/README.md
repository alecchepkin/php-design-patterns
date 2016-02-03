###Observer

####Type: Behavioral

####What it is:
Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

![Observer]

```php

$station = new WeatherStationObservable();
$station->setTemperature(15);
$this->assertEquals(15, $station->getTemperature());

$customer1 = new WeatherCustomerObserver();
$customer2 = new WeatherCustomerObserver();

$station->attach($customer1);
$station->attach($customer2);

$this->assertEquals(null, $customer1->getTemperature());
$this->assertEquals(null, $customer2->getTemperature());

$station->setTemperature(26);
$station->notify();

$this->assertEquals(26, $station->getTemperature());
$this->assertEquals(26, $customer1->getTemperature());
$this->assertEquals(26, $customer2->getTemperature());

$station->setTemperature(10);
$station->notify();

$this->assertEquals(10, $station->getTemperature());
$this->assertEquals(10, $customer1->getTemperature());
$this->assertEquals(10, $customer2->getTemperature());

```
_[ru][Ru Observer]_

[Observer]: https://github.com/olegre/DesignPatterns/blob/master/~images/Observer.png
[Ru Observer]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Observer.png
