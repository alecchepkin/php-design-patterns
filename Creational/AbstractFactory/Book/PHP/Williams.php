<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 11:30
 */

namespace Creational\AbstractFactory\Book\PHP;


use Creational\AbstractFactory\Book\PHP;
use Creational\AbstractFactory\BookHelper;

class Williams extends PHP
{
    protected $publisher = BookHelper::PUBLISHER_WILLIAMS;
}