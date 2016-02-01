<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 11:31
 */

namespace Creational\AbstractFactory\Book\PHP;


use Creational\AbstractFactory\Book\PHP;
use Creational\AbstractFactory\BookHelper;

class Piter extends PHP
{
    protected $publisher = BookHelper::PUBLISHER_PITER;
}