###Abstract Factory

####Type: Creational

####What it is:
Provides an interface for creating families of related or dependent objects without specifying their concrete class.

![AbstractFactory]

```php

$factory = new BookFactory\Piter();
$book = $factory->createPHPBook();

$this->assertEquals('php', $book->getType());
$this->assertEquals(BookHelper::PUBLISHER_PITER, $book->getPublisher());

$book = $factory->createMySQLBook();

$this->assertEquals('mysql', $book->getType());
$this->assertEquals(BookHelper::PUBLISHER_PITER, $book->getPublisher());

$factory = new BookFactory\Williams();
$book = $factory->createPHPBook();

$this->assertEquals('php', $book->getType());
$this->assertEquals(BookHelper::PUBLISHER_WILLIAMS, $book->getPublisher());

$book = $factory->createMySQLBook();

$this->assertEquals('mysql', $book->getType());
$this->assertEquals(BookHelper::PUBLISHER_WILLIAMS, $book->getPublisher());

```
_[ru][Ru AbstractFactory]_

[AbstractFactory]: https://github.com/olegre/DesignPatterns/blob/master/~images/AbstractFactory.png
[Ru AbstractFactory]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/AbstractFactory.png
