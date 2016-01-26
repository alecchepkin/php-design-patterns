<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 15:01
 */

namespace Behavioral\ChainOfResponsobility\Logger;


use Behavioral\ChainOfResponsobility\Logger;

class File extends Logger
{
    public function writeMessage($message)
    {
        echo sprintf("Writing to FILE: %s\n", $message);
    }


}