###Mediator

####Type: Behavioral

####What it is:
Define an object that encapsulates how a set of objects interact. Promotes loose coupling by keeping objects from referring to each other explicitly and it lets you vary their interactions independently.

![alt tag](https://habrastorage.org/getpro/habr/post_images/9c4/8eb/8ab/9c48eb8ab34d448fc5886c5c965de090.jpg)

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
