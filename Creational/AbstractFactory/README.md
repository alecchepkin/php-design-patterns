###Abstract Factory

####Type: Creational

####What it is:
Provides an interface for creating families of related or dependent objects without specifying their concrete class.

![alt tag](https://habrastorage.org/getpro/habr/post_images/710/505/d1a/710505d1aff5667c97fcb06215faee31.jpg)

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
