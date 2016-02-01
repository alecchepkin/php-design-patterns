<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 10:10
 */

namespace Behavioral\Mediator;


use Behavioral\Mediator\Mediator\Book as BookMediator;


class MediatorTest extends \PHPUnit_Framework_TestCase
{
    public function testMediator()
    {

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

    }
}
