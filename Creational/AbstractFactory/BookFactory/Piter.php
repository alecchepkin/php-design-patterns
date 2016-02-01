<?php

namespace Creational\AbstractFactory\BookFactory;

use Creational\AbstractFactory\BookFactory;
use Creational\AbstractFactory\Book\PHP\Piter as PiterPHPBook;
use Creational\AbstractFactory\Book\MySQL\Piter as PiterMySQLBook;

class Piter extends BookFactory
{
    public function createPHPBook()
    {
       return new PiterPHPBook();
    }

    public function createMySQLBook()
    {
        return new PiterMySQLBook();
    }

}