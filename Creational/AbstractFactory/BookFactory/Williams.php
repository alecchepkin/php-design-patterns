<?php

namespace Creational\AbstractFactory\BookFactory;

use Creational\AbstractFactory\BookFactory;
use Creational\AbstractFactory\Book\PHP\Williams as WilliamsPHPBook;
use Creational\AbstractFactory\Book\MySQL\Williams as WilliamsMySQLBook;

class Williams extends BookFactory
{
    public function createPHPBook()
    {
        return new WilliamsPHPBook();
    }

    public function createMySQLBook()
    {
        return new WilliamsMySQLBook();
    }
}

