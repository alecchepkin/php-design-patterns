<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 12:21
 */

namespace Creational\AbstractFactory;


class Test extends \PHPUnit_Framework_TestCase
{

    protected function setUp(){

    }

    protected function tearDown(){

    }

    public function testPiterBookFactory(){

        $factory = new BookFactory\Piter();
        $book = $factory->createPHPBook();

        $this->assertEquals('php', $book->getType());
        $this->assertEquals(BookHelper::PUBLISHER_PITER, $book->getPublisher());

        $book = $factory->createMySQLBook();

        $this->assertEquals('mysql', $book->getType());
        $this->assertEquals(BookHelper::PUBLISHER_PITER, $book->getPublisher());
    }

    public function testWilliamsBookFactory(){

        $factory = new BookFactory\Williams();
        $book = $factory->createPHPBook();

        $this->assertEquals('php', $book->getType());
        $this->assertEquals(BookHelper::PUBLISHER_WILLIAMS, $book->getPublisher());

        $book = $factory->createMySQLBook();

        $this->assertEquals('mysql', $book->getType());
        $this->assertEquals(BookHelper::PUBLISHER_WILLIAMS, $book->getPublisher());
    }
}

