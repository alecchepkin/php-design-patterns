<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 11:33
 */

namespace Creational\AbstractFactory\Book;


use Creational\AbstractFactory\Book;

class MySQL extends Book
{
    protected $type = "mysql";

}