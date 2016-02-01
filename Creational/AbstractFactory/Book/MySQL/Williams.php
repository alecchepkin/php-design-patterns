<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 11:35
 */

namespace Creational\AbstractFactory\Book\MySQL;


use Creational\AbstractFactory\Book\MySQL as MySQLBook;
use Creational\AbstractFactory\BookHelper;

class Williams extends MySQLBook
{
    protected $publisher = BookHelper::PUBLISHER_WILLIAMS;
}