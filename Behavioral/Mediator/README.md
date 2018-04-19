### Mediator

#### Type: Behavioral

#### What it is:
Define an object that encapsulates how a set of objects interact. Promotes loose coupling by keeping objects from referring to each other explicitly and it lets you vary their interactions independently.

![Mediator]

```php

$book = new BookMediator(
    $title = "Design Patterns",
    $author = "Erich Gamma"
);

$title = $book->getTitle();
$author = $book->getAuthor();

$this->assertEquals("Design Patterns", $title->getName());
$this->assertEquals("Erich Gamma", $author->getName());

$book->setTitle("Design Patterns: Elements of Reusable Object-Oriented Software");
$book->setAuthor("Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides");


$this->assertEquals("Design Patterns: Elements of Reusable Object-Oriented Software", $title->getName());
$this->assertEquals("Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides", $author->getName());

```
_[ru][Ru Mediator]_

[Mediator]: https://github.com/olegre/DesignPatterns/blob/master/~images/Mediator.png
[Ru Mediator]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Mediator.png
