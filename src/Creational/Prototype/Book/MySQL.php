<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 12:27
 */

namespace Creational\Prototype\Book;

use Creational\Prototype\Book;

class MySQL extends Book{
    protected $type = "mysql";

    public function __clone()
    {
        // do something
    }
}
