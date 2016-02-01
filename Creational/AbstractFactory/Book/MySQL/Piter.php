<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 11:35
 */

namespace Creational\AbstractFactory\Book\MySQL;


use Creational\AbstractFactory\Book\MySQL;
use Creational\AbstractFactory\BookHelper;

class Piter extends MySQL
{
    protected $publisher = BookHelper::PUBLISHER_PITER;
}