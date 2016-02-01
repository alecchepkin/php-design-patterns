<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 12:27
 */

namespace Creational\Prototype\Book;

use Creational\Prototype\Book;

class PHP extends Book{
    protected $type = "php";

    public function __clone()
    {
        // do something
    }


}