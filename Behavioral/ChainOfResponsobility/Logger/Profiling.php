<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 15:01
 */

namespace Behavioral\ChainOfResponsobility\Logger;


use Behavioral\ChainOfResponsobility\Logger;

class Profiling extends Logger
{
    public function writeMessage($message)
    {
        echo sprintf("Writing to PROFILING: %s\n", $message);
    }

}