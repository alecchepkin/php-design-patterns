<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 27/01/16
 * Time: 10:42
 */

namespace Behavioral\Command;


class Window
{
    private $commands = [];

    public function placeOperation(Operation $operation)
    {
        $operation->execute();
        $this->commands[] = $operation;
    }
}