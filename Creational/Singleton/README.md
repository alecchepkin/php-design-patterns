### Singleton

#### Type: Creational

#### What it is:
Ensure a class only has one instance and provide a global point of access to it.


![Singleton]

```php

$singleton = Singleton::instance();
$singleton2 = Singleton::instance();
$this->assertTrue($singleton===$singleton2);

```
_[ru][Ru Singleton]_

[Singleton]: https://github.com/olegre/DesignPatterns/blob/master/~images/Singleton.png
[Ru Singleton]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Singleton.png
